<x-MainLayout subheading="{{ $data->name }}" bootstrap="active" bIcons="active" jQuery="active">
    <main class="h-100 w-100" style="padding-top: 25vh;">
        <div class="container px-5">
            <h3 class="text-center text-capitalize fs-2 mb-4">{{ $data->name }}</h3>
            <div class="card mb-5 shadow border-0">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img src="{{ $data->employee_profile }}" class="img-fluid rounded-start h-100" alt="...">
                    </div>
                    <div class="col-md-10">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->designation }}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda repellendus blanditiis tempore ullam pariatur, aliquid itaque quasi dolorem commodi a mollitia. Iure accusantium autem aut amet rem aspernatur eaque! Fuga ab autem a voluptates cupiditate maiores consequatur perspiciatis eum voluptatum recusandae itaque corporis iure maxime, ducimus architecto. Nulla beatae a mollitia, recusandae doloribus saepe sapiente incidunt voluptatem, eum facilis aliquam repellendus sed alias non sequi natus consectetur distinctio nisi possimus dignissimos at corporis nihil minus labore. Ut sunt delectus amet molestiae nemo voluptatum similique consequuntur dolorem magni expedita optio, ea suscipit quam quidem in quis dicta asperiores, atque aspernatur quos!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-MainLayout>