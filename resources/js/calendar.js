import { Calendar } from "@fullcalendar/core";
import interactionPlugin, { Draggable } from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";
import frLocale from '@fullcalendar/core/locales/fr';

import dayjs from "dayjs";
import Litepicker from "litepicker";
import dayjs_locale_fr from 'dayjs/locale/fr';

window.Calendar = Calendar;
window.Draggable = Draggable;

window.interactionPlugin = interactionPlugin ;
window.dayGridPlugin = dayGridPlugin ;
window.timeGridPlugin = timeGridPlugin ; 
window.listPlugin = listPlugin ;
window.calendarFrLocale = frLocale ;

window.dayjs_locale_fr = dayjs_locale_fr;
dayjs.fr = dayjs_locale_fr;
dayjs.locale(dayjs_locale_fr);
window.dayjs = dayjs;

