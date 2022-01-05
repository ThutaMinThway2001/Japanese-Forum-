<x-MasterLayout>
    <x-Main>
        <x-ForumPosts :posts="$posts" />
        <x-Pagination :posts="$posts" />
    </x-Main>
</x-MasterLayout>