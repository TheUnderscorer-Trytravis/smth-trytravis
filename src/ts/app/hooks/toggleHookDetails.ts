export default ( event: Event ) =>
{
    const activatorBtn = event.currentTarget as HTMLElement;
    const { parentElement } = activatorBtn;
    const list = parentElement.querySelector( '.smth-hook-details' );

    parentElement.classList.toggle( 'smth-open' );
    list.classList.toggle( 'smth-hidden' );
}
