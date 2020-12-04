$(function() {
    var navPos = jQuery( '.menu_bar' ).offset().top; // グローバルメニューの位置
    var navHeight = jQuery( '.menu_bar' ).outerHeight(); // グローバルメニューの高さ
    jQuery( window ).on( 'scroll', function() {
      if ( jQuery( this ).scrollTop() > navPos ) {
        jQuery( 'body' ).css( 'padding-top', navHeight );
        jQuery( '.menu_bar' ).addClass( '.m_fixed' );
      } else {
        jQuery( 'body' ).css( 'padding-top', 0 );
        jQuery( '.menu_bar' ).removeClass( '.m_fixed' );
      }
    });
    });

   