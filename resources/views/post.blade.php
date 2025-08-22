    <x-layout :title="$title">

        {{-- <article class="py-8 max-w-screen-md ">
            <h2 class="mb-1 text-3-xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            <div class="text-base text-gray-500">
                <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 1
                Januari 2025
            </div>
            <p class="my-4 font-light">{{ $post['body'] }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline">
                &laquo; Back to all posts.</a>
        </article> --}}

        <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <a href="/posts" class="font-medium text-blue-500 hover:underline">
                    &laquo; Back to all posts.</a>
                <article
                    class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                <img class="mr-4 w-16 h-16 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                                <div>
                                    <a href="#" rel="author"
                                        class="text-xl font-bold text-gray-900 dark:text-white">Jese Leos</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator &
                                        CEO Flowbite</p>
                                    <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                            datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                                </div>
                            </div>
                        </address>
                        <h1
                            class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                            Best practices for successful prototypes</h1>
                    </header>
                    <p>Before going digital, you might benefit from scribbling down some ideas in a sketchbook. This
                        way,
                        you can think things through before committing to an actual design project.</p>
                </article>
            </div>
        </main>
    </x-layout>
