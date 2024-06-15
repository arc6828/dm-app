<x-blogzine.theme>
    <section class="py-4">
        <div class="container">
            <form action="{{ route('appoint.update', ["appoint"=>$item->id]) }}" method="post">
                @csrf
                @method("patch")

                @include('appointment.form')
            </form>
        </div>
    </section>
</x-blogzine.theme>
