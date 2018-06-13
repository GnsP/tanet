import React from 'react';
import cn from '../my-js-lib/cn';

const Button = props => (
  <button className={cn`
      btn
      ${props.primary && 'btn-primary'}
      ${props.link && 'btn-link'}
      ${props.block && 'btn-block'}
      ${props.success && 'btn-success'}
      ${props.error && 'btn-error'}
      ${props.action && 'btn-action'}
      ${props.active && 'btn-active'}
      ${props.disabled && 'disabled'}
      ${props.loading && 'loading'}
      ${props.circle && 'circle'}
      ${props.large && 'btn-lg'}
      ${props.small && 'btn-sm'}
      ${props.className}
    `}
    {...props}
  >
    {props.children}
  </button>
);
export default Button;
