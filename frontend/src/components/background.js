import React from 'react';
import cn from '../my-js-lib/cn';

const Background = props => (
  <div className={cn`background-container`} style={{backgroundImage: props.src}}>
    {props.children}
  </div>
);

export default Background;
