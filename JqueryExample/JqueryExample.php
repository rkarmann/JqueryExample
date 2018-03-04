<?php

  /** Plugin declaration
   * extends MantisPlugin
   * Example plugin that implements Jquery files
   */

class JqueryExamplePlugin extends MantisPlugin
 {

   # Declare your plugin here
   # Properties will be used by Mantis plugin's system
   function register()
    {
      $this->name = 'JqueryExample';
      $this->description = 'A Jquery plugin to modify Mantis Look';
      $this->page = '';

      $this->version = '0.0.1';
      $this->requires = array(
        "MantisCore" => "2.0.0",
      );

      $this->author = 'Your Self';
      $this->contact = 'yourmail@address.com';
      $this->url = 'yourwebsite.org';
    }

    # Hooked functions runs when the event is triggered
    # Here we need to display a '<scrit>' link into Footer
    # So we trigger the EVENT_LAYOUT_PAGE_FOOTER so Jquery can run after page is fully loaded
    function hooks()
      {
        return array(
          "EVENT_LAYOUT_PAGE_FOOTER" => 'scripts',
        );
      }

    # This method will echo our '<script>' link to Jquery
    function scripts()
      {
        # Implement the Jquery files
        echo '<script type="text/javascript" src="' . plugin_file( 'JqueryExample.js' ) . '"></script>';
      }
 }
?>
