import { hooks } from './selectors';
import toggleHookDetails from './toggleHookDetails';

hooks.forEach( hook =>
    hook.querySelector( '.smth-activator' ).addEventListener( 'click', toggleHookDetails )
);
