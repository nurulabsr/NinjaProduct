{{-- @extends('home.index')
@section('ninja_default_section_1')
<div class="container">
    <div class="row">
        <?php
            // Assuming $data is an array with your data
            foreach ($data as $datum) {
                echo '<div class="col-md-4">';
                    echo '<div class="card">';
                        echo '<div class="card-body">';
                            echo '<img src="{{asset()}}" alt=" " width=" ">'';
                            echo '<h5 class="card-title">' . 'Title' . '</h5>';
                            echo '<p class="card-text" title="' . 'Description' . '">';
                                // echo \Illuminate\Support\Str::limit( , 100, '...');
                            echo '</p>';
                            echo '<button class="btn btn-primary">' . 'Button' . '</button>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>
@endsection --}}