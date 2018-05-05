class CreateEvents < ActiveRecord::Migration[5.1]
  def change
    create_table :events do |t|
      t.string :title
      t.integer :semester
      t.datetime :start
      t.datetime :end
      t.boolean :allday
      t.integer :repeating
      t.string :url

      t.timestamps
    end
  end
end
