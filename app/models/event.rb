# Model that validates everything
class Event < ApplicationRecord
  VALID_SITE_REGEX = %r[/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?
                        [A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9
                        .-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#
                        ?(?:[\w]*))?)/]
  validates :title, presence: true,
                    length: { in: 5..20,
                              too_short: ' pequeno demais',
                              too_long: ' longo demais' }
  validates :semester, presence: true,
                       numericality: { only_integer: true,
                                       in: 0..20 }
  validates :start, presence: true
  validates :end, allow_blank: true,
                  timeliness: { after: :start,
                                after_message: ' deve ser após start' }
  validates :url, format: { with: VALID_SITE_REGEX,
                            allow_blank: true }
end
