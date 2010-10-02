class My_Widget extends WP_Widget {
function My_Widget() {
    // widget actual processes
                     }
function form($instance) {
  // outputs the options form on admin
             }

function update($new_instance, $old_instance) {
 // processes widget options to be saved
                     }
    
function widget($args, $instance) {
  // outputs the content of the widget
                              }
   
                            }
 register_widget('My_Widget');
