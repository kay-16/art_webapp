<x-app-layout>
<div class="container">
    <section class="hero container max-w-screen-lg mx-auto flex justify-center">
        <img src="/storage/{{$post->image}}" class="mx-auto w-50 h-50" alt="image">

        <div class="container">
            <div>
                <h3>{{$post->title}}</h3>

                <p>{{$post->type}}</p>
                <p>{{$post->year}}</p>

            </div>
    </div>
    </section>

    
</div>

</x-app-layout>
