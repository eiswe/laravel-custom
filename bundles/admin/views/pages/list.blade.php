@layout('admin::layouts.navi')

@section('content')

  <div class="span10">

    <div class="span10">
        <h1>Page Area</h1>

        @if(Session::get('alert'))
            <?php 
                // Fetch alert
                $alert = Session::get('alert'); 
                // Print Alert message
                print '<div class="alert alert-success">The '.$alert['event'].' was '.$alert['state'].'</div>';
            ?>
        @endif

        <?php
            $url = URL::base(); // http://laravel.dev       //   return the Base URL for Developing from different Servers

            /*    Will generate a list of Pages on this site! */
            $headi = array(
                'ID',
                'UserID',
                'StyleID',
                'Title',
                'Description',
                'TextsIDs',
                'ImagesIDs',
                'MoviesIDs',
            );

            echo Table::hover_tablesorter_condensed_open();
            echo Table::headers($headi);
            echo Table::body($pages)
                ->ignore( 'created_at', 'updated_at' );
            echo Table::close();

            /* admin menu */
          $url = URL::base();       // http://laravel.dev                             //   return the Base URL for Developing from different Servers
          $id = Session::get('id');                                                   // fetch Session:id - user is logged in??

          echo Button::link( $url.'/admin/page/add/Text', 'Create Page - Text' );

        ?>      <br /><br /><br />
                <h3>Delete Page!</h3>  

                    @if(Session::get('error')) <?php 
                            $error = Session::get('error'); 
                            foreach ($error as $value) {
                                echo '<div class="alert alert-error">'.$value.'</div>';
                            } ?>
                    @endif 
        <?php

        echo Form::inline_open();
        echo Form::text('id', null, array('class' => 'input-small', 'placeholder' => 'ID of Page'));
        echo Form::submit('Delete Page!');
        echo Form::token();
        echo Form::close();   

        ?>
    </div>
    <div class="span2">
        <div class="hero-unit">
            <h1>Place for Infos</h1>
        </div>
    </div>

@endsection

@section('script')

    {{ Asset::container('footer')->scripts() }}
    {{ Asset::container('table')->scripts() }}

    <script type="text/javascript">
        $(document).ready(function(){

            $('tr').click(function() {                                                // table row was clicked
                var value= $(this).closest('tr').children('td:first').text();         // fetch id of clicked row
                var baseUrl = document.URL ;                                          // fetch current URL
                var url = baseUrl + '/../edit/' + value;                                 // build new url: baseUrl/edit/id
                window.location.replace(url);                                         // redirect to edit form
            });

            $('table').tablesorter({                                                  // Sort hole table with click on Title
                onRenderHeader: function(index) {                                     // Indexies fields of table
                }
            });
        }); 
    </script>

@endsection