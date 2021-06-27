@include('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\CategoryController::}}--}}

<div class="container bg-white" style="border-radius: 20px;">
    {{--  Category Show SummerNote  --}}
    @include('category.Category_Includes.show_Includes.Show_SummerNote')
    {{--  Category Show Header  --}}
    @include('category.Category_Includes.show_Includes.Show_Header')
    {{--  Category Show Video  --}}
    @include('category.Category_Includes.show_Includes.Show_Video')
    {{--  Category Show Desc and Tags  --}}
    @include('category.Category_Includes.show_Includes.Show_Desc_Tags')
</div>
<hr>
{{-- Category Show Footer  --}}
@include('category.Category_Includes.show_Includes.Show_Footer')
