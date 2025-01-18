<x-form action="{{ route('blog.index') }}">

    <div class="row">

        <div class="col-12 col-md-4">

            <x-form-item>

                <x-form-input name="search" placeholder="{{ __('Поиск') }}" value="{{ request('search') }}"/>

            </x-form-item>

        </div>

        <div class="col-12 col-md-4">

            <x-form-item>

                <x-form-select name="category_id" value="{{ request('category_id') }}" :options="[

                        null => __('Все категории'),
                        1 => __('Первая категория'),
                        2 => __('Вторая категория'),

                        ]"
                />

            </x-form-item>

        </div>

        <div class="col-12 col-md-4">

            <x-button type="submit" class="w-100">

                {{ __('Применить') }}

            </x-button>

        </div>

    </div>

</x-form>
