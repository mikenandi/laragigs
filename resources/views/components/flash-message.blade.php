@if (session()->has('message'))
<div x-data="{show: false}" x-init="setTimeout(()=> show = false, 8000)" x-show="show"
    class="fixed top-10 left-1/2 transform bg-green-500 text-white px-48 py-3 border-radius">
    <p>{{session('message')}}</p>
</div>
@endif