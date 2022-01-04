<div class="col-4">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton" data-mdb-toggle="dropdown">
            {{isset($currentCategory) ? $currentCategory->name : 'Choose Category'}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach ($categories as $category)
            <li>
                <a class="dropdown-item"
                    href="/?category={{$category->slug}}{{request('search')? '&search='.request('search') : ''}}">{{$category->name}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>