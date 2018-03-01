@if(count($errors))
            <div class="uk-alert-danger" uk-alert>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $error }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif