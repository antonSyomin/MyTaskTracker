<div class="card-body"> 
    <div class="d-flex justify-content-between">
        {{ $slot }} 
        @isset($right)
        {{ $right }}
        @endisset
    </div>
</div>


