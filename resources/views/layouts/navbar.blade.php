<div class="w-full h-10 items-center flex bg-[#2c3e50]">
    <div class="w-5/12 flex justify-around text-[#ecf0f1]">

    @foreach($navbar as $name => $url)
        <a href="{{ $url }}">{{ $name }}</a>
    @endforeach
    
    </div>
</div>