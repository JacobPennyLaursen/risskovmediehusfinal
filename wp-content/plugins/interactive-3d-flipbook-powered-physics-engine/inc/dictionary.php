<?php
  namespace iberezansky\fb3d;

  function __($str, $domain) {
    global $fb3d;
    return $fb3d['load-keys']? $str: call_user_func('\__', $str, $domain);
  }

  function load_textdomain() {
    global $fb3d;
    $fb3d['load-keys'] = true;
    $keys = load_dictionary();
    $fb3d['load-keys'] = false;
    load_plugin_textdomain(POST_ID, false, DIR_NAME.'/languages');
    $values = load_dictionary();
    $l = count($keys);
    $fb3d['dictionary'] = array();
    for($i=0; $i<$l; ++$i) {
      $fb3d['dictionary'][$keys[$i]] = $values[$i];
    }
  }
  add_action('plugins_loaded', '\iberezansky\fb3d\load_textdomain');

  function load_dictionary() {
    return array(
      __('auto', POST_ID),
      __('Sorry something went wrong with the server please try again', POST_ID),
      __('General', POST_ID),
      __('Pages', POST_ID),
      __('Book properties', POST_ID),
      __('Sheet properties', POST_ID),
      __('Cover properties', POST_ID),
      __('Page properties', POST_ID),
      __('Source', POST_ID),
      __('PDF file', POST_ID),
      __('Images, HTMLs files', POST_ID),
      __('interactive', POST_ID),
      __('Page number', POST_ID),
      __('Remove', POST_ID),
      __('CSS Layer', POST_ID),
      __('CSS', POST_ID),
      __('HTML', POST_ID),
      __('Java Script', POST_ID),
      __('Title', POST_ID),
      __('Select files', POST_ID),
      __('Open', POST_ID),
      __('Add image pages', POST_ID),
      __('Add HTML pages', POST_ID),
      __('Add PDF page', POST_ID),
      __('Remove all pages', POST_ID),
      __('items per page', POST_ID),
      __('All', POST_ID),
      __('None', POST_ID),
      __('Next', POST_ID),
      __('Previous', POST_ID),
      __('PDF page number', POST_ID),
      __('Select image', POST_ID),
      __('Change image', POST_ID),
      __('Auto thumbnail', POST_ID),
      __('book height', POST_ID),
      __('book width', POST_ID),
      __('gravity constant', POST_ID),
      __('amount of rendered cached pages', POST_ID),
      __('render loaded hidden pages in the background', POST_ID),
      __('render pages while they are flipping, it can slow down animation', POST_ID),
      __('amount of loaded by user pages that are used for predicting user behaviour', POST_ID),
      __('quantity of predicted pages for automatic loading', POST_ID),
      __('initial flipping velocity, it should be enough to overcome the gravity', POST_ID),
      __('max corner (flexible part of the sheet) deviation from the whole sheet', POST_ID),
      __('sheet flexibility', POST_ID),
      __('part of the sheet that can be flexed, should be in range (0, 1)', POST_ID),
      __('speed of changing bending angle of the flexible corner', POST_ID),
      __('curvature of open sheet, 0 is for flat sheet', POST_ID),
      __('width texture resolution', POST_ID),
      __('height texture resolution', POST_ID),
      __('sheet color', POST_ID),
      __('sheet thickness', POST_ID),
      __('sheet weight', POST_ID),
      __('cover height is more on 2*padding and cover width more on 1*padding than page ones, so you can set different sizes for typical pages and cover like for real book', POST_ID),
      __('binder texture', POST_ID),
      __('Deep linking URL parameter name', POST_ID),
      __('items pre page', POST_ID),
      __('3D Flip Book', POST_ID),
      __('View mode', POST_ID),
      __('Advanced', POST_ID),
      __('Title', POST_ID),
      __('Thumbnail', POST_ID),
      __('Thumbnail and Lightbox', POST_ID),
      __('Lightbox activation link', POST_ID),
      __('Fullscreen', POST_ID),
      __('Select skin', POST_ID),
      __('3D FlipBook container CSS classes', POST_ID),
      __('Lightbox theme', POST_ID),
      __('Light', POST_ID),
      __('Dark', POST_ID),
      __('default value', POST_ID),
      __('minimum value', POST_ID),
      __('maximum value', POST_ID),
      __('amount of zoom levels', POST_ID),
      __('amount of lighting levels', POST_ID),
      __('pan step for comands cmdPanLeft, cmdPanRight, cmdPanUp, cmdPanDown', POST_ID),
      __('zoom in', POST_ID),
      __('zoom out', POST_ID),
      __('set default zoom', POST_ID),
      __('show bookmarks', POST_ID),
      __('turn 10 pages backward', POST_ID),
      __('turn a page backward', POST_ID),
      __('turn a page forward', POST_ID),
      __('turn 10 pages forward', POST_ID),
      __('download', POST_ID),
      __('print', POST_ID),
      __('toggle fulscreen mode', POST_ID),
      __('show/hide the settings toolbar button', POST_ID),
      __('toggle the smart pan mode', POST_ID),
      __('toggle single page mode', POST_ID),
      __('toggle sound effects', POST_ID),
      __('toggle statistics monitor', POST_ID),
      __('increase lighting', POST_ID),
      __('reduce lighting', POST_ID),
      __('move pan to the left', POST_ID),
      __('move pan to the right', POST_ID),
      __('move pan to the up', POST_ID),
      __('move pan to the down', POST_ID),
      __('rotate the book by means mouse drag operation', POST_ID),
      __('zoom by means mouse drag operation', POST_ID),
      __('pan by means mouse drag operation', POST_ID),
      __('zoom by means mouse wheel operation', POST_ID),
      __('rotate the book by means touch drag operation', POST_ID),
      __('zoom by means touch drag operation', POST_ID),
      __('pan by means touch drag operation', POST_ID),
      __('Ctrl, Shift, Alt, or their combination like Ctrl+Shift', POST_ID),
      __('modificator', POST_ID),
      __('keyboard key', POST_ID),
      __('key', POST_ID),
      __('mouse button', POST_ID),
      __('button', POST_ID),
      __('amount of touches', POST_ID),
      __('touches', POST_ID),
      __('event that activates the action', POST_ID),
      __('event', POST_ID),
      __('is action enabled', POST_ID),
      __('enabled', POST_ID),
      __('is active by default', POST_ID),
      __('active', POST_ID),
      __('is active for mobile devices by default', POST_ID),
      __('activeForMobile', POST_ID),
      __('Zoom', POST_ID),
      __('Lighting', POST_ID),
      __('Pan', POST_ID),
      __('3D FlipBook - Settings', POST_ID),
      __('General', POST_ID),
      __('Actions', POST_ID),
      __('Update', POST_ID),
      __('Sorry something went wrong with the server please try again', POST_ID),
      __('Settings saved successfully', POST_ID),
      __('One', POST_ID),
      __('Two', POST_ID),
      __('Three', POST_ID),
      __('Left', POST_ID),
      __('Middle', POST_ID),
      __('Right', POST_ID),
      __('Mouse button down', POST_ID),
      __('Mouse move', POST_ID),
      __('Mouse button up', POST_ID),
      __('Click', POST_ID),
      __('Double click', POST_ID),
      __('Touch start', POST_ID),
      __('Touch move', POST_ID),
      __('Touch end', POST_ID),
      __('Key down', POST_ID),
      __('Key press', POST_ID),
      __('Key up', POST_ID),
      __('rtl is a right-to-left, top-to-bottom script, writing starts from the right of the page and continues to the left', POST_ID),
      __('Please wait... the Application is Loading', POST_ID),
      __('PDF is Loading:', POST_ID),
      __('Previous page', POST_ID),
      __('Next page', POST_ID),
      __('Table of contents', POST_ID),
      __('Close', POST_ID),
      __('Bookmarks', POST_ID),
      __('Thumbnails', POST_ID),
      __('Search', POST_ID),
      __('Zoom in', POST_ID),
      __('Zoom out', POST_ID),
      __('Fit view', POST_ID),
      __('10 pages backward', POST_ID),
      __('10 pages forward', POST_ID),
      __('Download', POST_ID),
      __('Print', POST_ID),
      __('Full screen', POST_ID),
      __('Settings', POST_ID),
      __('Smart pan', POST_ID),
      __('Single page', POST_ID),
      __('Sounds', POST_ID),
      __('Stats', POST_ID),
      __('Increase lighting', POST_ID),
      __('Reduce lighting', POST_ID),
      __('Loading...', POST_ID)
    );
  }
?>
