export default ( event: Event ) =>
{
    const hookEl = event.target as HTMLElement;
    const { parentElement } = hookEl;
    const list = parentElement.querySelector( '.smth-hook-details' );

    list.classList.toggle( 'smth-hidden' );
}
