export interface Icon {
  name: string
  color?: string
}

export const colors = {
  'success': 'text-wire_positive-400',
  'error': 'text-wire_negative-400',
  'info': 'text-wire_info-400',
  'warning': 'text-wire_warning-400',
  'question': 'text-wire_secondary-400'
}

export const icons = {
  'success': { name: 'check-circle', color: colors['success'] },
  'error': { name: 'exclamation', color: colors['error'] },
  'info': { name: 'information-circle', color: colors['info'] },
  'warning': { name: 'exclamation-circle', color: colors['warning'] },
  'question': { name: 'question-mark-circle', color: colors['question'] }
}

export const parseIcon = (options: Icon): Icon => {
  if (icons[options.name]) {
    const { name, color } = icons[options.name] as Icon
    options.name = name
    if (!options.color) { options.color = color }
  }

  return options
}
