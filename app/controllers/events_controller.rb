# Classe que controla os Eventos (provas, trabalhos, eventos em geral)
# relacionados ao curso
class EventsController < ApplicationController
  before_action :set_event, only: %i[show edit update destroy]
  before_action :reload, only: %i[index create destroy update]
  before_action :permission

  def index
    reload
  end

  def new
    @event = Event.new
  end

  def create
    @event = Event.new(event_params)
    if @event.save(event_params)
      redirect_to events_path
    else
      render new_event_path
    end
  end

  def show; end

  def destroy
    @event = nil if @event.destroy do
      redirect_to events_path
    end
  end

  def edit
    @event = Event.find(params[:id])
  end

  def update
    @event = Event.find(params[:id])
    if @event == @event.update_attributes(event_params)
      flash[:success] = 'Evento atualizado com sucesso'
      redirect_to events_path
    else
      flash[:danger] = 'Problema com atualização encontrada'
      redirect_to edit_event_path
    end
  end

  private

  def event_params
    params.require(:event).permit(:title,
                                  :semester,
                                  :start,
                                  :end,
                                  :allday,
                                  :repeating,
                                  :url)
  end

  def set_event
    @event = Event.find(params[:id])
  end

  def reload
    @events = Event.order(:title).page params[:page]
  end

  def permission
    render file: 'public/401' unless logged_in?
  end
end
