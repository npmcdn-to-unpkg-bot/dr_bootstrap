<div class="relationship_container">
  <input class='field_data' id="<?php echo $field['id']; ?>" name="<?php echo $field['name']; ?>" type="hidden" value='<?php echo $field['value']; ?>'>
  <div class="widgets_container">
    <div class="header">
      <h2>Widgets</h2>
    </div>
    <div class="container">
      <?php foreach ($widgets as $widget) : ?>
        <div class="widget draggable" data-widget="<?php echo $widget['name']; ?>"><?php echo $widget['label']; ?></div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="template_container">
    <?php
    $i = 0;
    foreach ($templates as $template) :
    ?>
      <div class="template" data-template="<?php echo $template; ?>">
        <div class="header"><?php echo $template; ?></div>
        <div class="widgets"></div>
      </div>
    <?php
    if ($i % 3 == 2) {
      echo "<div class='clearfix'></div>";
    }
    $i++;
    endforeach;
    ?>
  </div>
  <div class="clearfix"></div>
</div>

<script>
  jQuery(function($) {
    // Setup draggable
    $('.widgets_container .widget').draggable({
      connectToSortable : '.template_container .widgets',
      helper : 'clone',
      revert : 'invalid'
    });

    // Setup droppable
    $('.template_container .widgets').sortable({
      revert  : true,
      receive: function(event, ui) {
        sortableIn = 1;
        var widget = ui.item.data('widget'),
            widget_container = $(this);
        $(this).children('.widget').each(function () {
          var amount = $(widget_container).children("div[data-widget='" + widget + "']").length;
          if ($(this).data('widget') === widget && amount > 1) {
            $(this).remove();
          }
        });
      },
      over: function(e, ui) { sortableIn = 1; },
      out: function(e, ui) { sortableIn = 0; },
      beforeStop: function(e, ui) {
        if (sortableIn == 0) { 
          ui.item.remove();
        }
      }
    });

    // Add widgets back to sortables
    var field_data = $('.relationship_container .field_data').val()

    if (field_data != '') {
      var data = JSON.parse(field_data);
      $('.template_container .template').each(function() {
        var template = $(this).data('template'),
            widgets  = data[template];

        // Loop widgets and add them to the list
        for (var i in widgets) {
          var widget = widgets[i].replace('_', ' '),
              element = "<div class='widget capitalize' data-widget='" + widget + "'>" + widget + "</div>";
          $(this).children('.widgets').append(element);
        }
      });
    }

    // Store data in input
    $('.acf-button').click(function() {
      // Loop through templates and gather data into object
      var widget_template_data = {};
      $('.template_container .template').each(function () {
        // Get template data
        var template = $(this).data('template'),
            widgets  = new Array();

        // Get widgets
        $(this).children('.widgets').children('.widget').each(function() {
          var widget_name = $(this).data('widget');
          widgets.push(widget_name);
        });

        // Store data in object
        widget_template_data[template] = widgets;
      });
      // Add data to input box
      $('.relationship_container .field_data').val(JSON.stringify(widget_template_data));
    });
  });
</script>

<style>
  .widgets_container {
    float: left;
    width: 200px;
    border: 1px solid #dfdfdf;
  }

  .widgets_container h2 {
    padding: 5px;
    font-weight: bold;
    text-align: center;
    margin: 0px !important;
  }

  .widgets_container .widget {
    margin: 3px;
    padding: 5px;
    cursor: move;
    text-align: center;
  }

  .widgets_container .delete {
    display: none;
  }

  .template_container {
    float: left;
    margin-top: -5px;
    margin-left: 10px;
  }

  .template_container .template {
    float: left;
    margin: 5px;
    width: 200px;
    min-height: 150px;
    border: 1px solid #dfdfdf;
  }

  .template_container .header {
    padding: 5px;
    font-size: 1.5em;
    text-align: center;
  }

  .template_container .widgets {
    min-height: 120px;
  }

  .template_container .widget {
    margin: 3px;
    padding: 5px;
    cursor: move;
    text-align: center;
  }

  .widget .delete {
    float: right;
  }

  .widgets_container .widget,
  .template .widget.capitalize {
    text-transform: capitalize;
  }

  .widgets_container .header,
  .template_container .header {
    border-bottom: 1px solid #dfdfdf;
  }
</style>