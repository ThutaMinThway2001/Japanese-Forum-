<x-MasterLayout>
    <x-Main>
        <div class="row tm-row">
            <x-Detail :post="$post" />
            <x-CategoryAndRelatedPost :randomOrderPost="$randomOrderPost" />
        </div>
    </x-Main>
</x-MasterLayout>