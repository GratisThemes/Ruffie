( function( window, document ) {

  const html         = document.querySelector( 'html' )
  const scrollToTop  = html.querySelector( '#scroll-to-top' )
  const radioButtons = html.querySelectorAll( '.entry-content input[type="radio"], .widget input[type="radio"], #wp-comment-cookies-consent' )
  const checkBoxes   = html.querySelectorAll( '.entry-content input[type="checkbox"], .widget input[type="checkbox"]' )

  // Replace no-js class with js on html element
  html.classList.remove( 'no-js' )
  html.classList.add( 'js' )

  function addLabel( input, i ) {
    const label = document.createElement( 'label' )

    if ( !input.id ) input.id = `ruffie-labeler-${input.type}-${i}`

    input.classList.add( 'ruffie-labeler' )
    label.setAttribute( 'for', input.id )
    label.classList.add( `ruffie-labeler-${input.type}-label` )

    input.parentNode.insertBefore(label, input.nextSibling)
  }

  radioButtons.forEach(addLabel)
  checkBoxes.forEach(addLabel)

  // Scroll to top
  window.addEventListener( 'scroll', function() {
    scrollToTop.style.bottom = window.scrollY > 500 ? '1em' : '-2000px'
  } )

  scrollToTop.addEventListener( 'click', function(event) {
    event.preventDefault()
    window.scrollTo( { top: 0, behavior: 'smooth' } )
  } )

} ) ( typeof window != 'undefined' ? window : this, document )
