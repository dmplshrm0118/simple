@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-8 pt-16">
        <h2 class="uppercase ml-5 px-2 tracking-wider font-mono text-indigo-400 text-lg font-semibold border-l-2 border-indigo-400">Recent Blogs</h2>
        <div class="grid grid-cols-2 px-5 mt-6 gap-8">
            <div class="transition duration-350 ease-in-out bg-transparent hover:bg-transparent transform hover:-translate-y-1 hover:scale-105">
                <div class="mt-2">
                    <a href="/blog/the-next-big-thing-in-vue-js">
                        <img class="rounded-t-lg" src="/img/4.png" alt="">    
                    </a>
                </div>
                <div class="mt-2">
                    <a href="/blog/the-next-big-thing-in-vue-js" class="text-lg font-semibold border-l-2 border-indigo-400 px-2 text-indigo-400 uppercase font-mono mt-2">The Next Big Thing In Vue.js</a>
                    <h6 class="text-blue-100 px-2">Posted June 15th, 2020</h6>
                </div>
            </div>
            <div class="transition duration-350 ease-in-out bg-transparent hover:bg-transparent transform hover:-translate-y-1 hover:scale-105">
                <div class="mt-2">
                    <a href="/blog/seven-things-you-yrobably-didn't-know-about-laravel">
                        <img class="rounded-t-lg" src="/img/1.png" alt="">    
                    </a>
                </div>
                <div class="mt-2">
                    <a href="/blog/seven-things-you-yrobably-didn't-know-about-laravel" class="text-lg font-semibold border-l-2 border-indigo-400 px-2 text-indigo-400 uppercase font-mono mt-2">Seven Things You Probably Didn't Know About Laravel</a>
                    <h6 class="text-blue-100 px-2">Posted June 13th, 2020</h6>
                </div>
            </div>
          </div>
        <div class="px-2 mt-8 mb-8">
            <div class="flex mx-2">
              <div class="w-1/3 px-2 transition duration-350 ease-in-out bg-transparent hover:bg-transparent transform hover:-translate-y-1 hover:scale-105">
                <div class="h-100">
                    <div class="mt-2">
                        <a href="/blog/the-next-big-thing-in-tailwind">
                            <img class="rounded-t-lg" src="/img/2.png" alt="">    
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="/blog/the-next-big-thing-in-tailwind" class="text-lg font-semibold border-l-2 border-indigo-400 px-2 text-indigo-400 uppercase font-mono mt-2">The Next Big Thing In Tailwind</a>
                        <h6 class="text-blue-100 px-2">Posted June 11th, 2020</h6>
                    </div>
                </div>
              </div>
              <div class="w-1/3 px-2 transition duration-350 ease-in-out bg-transparent hover:bg-transparent transform hover:-translate-y-1 hover:scale-105">
                <div class="h-100">
                    <div class="mt-2">
                        <a href="/blog/alpine-js-explained-in-fewer-than-140-characters">
                            <img class="rounded-t-lg" src="/img/3.png" alt="">    
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="/blog/alpine-js-explained-in-fewer-than-140-characters" class="text-lg font-semibold border-l-2 border-indigo-400 px-2 text-indigo-400 uppercase font-mono mt-2">Alpine.js Explained In Fewer Than 140 Characters</a>
                        <h6 class="text-blue-100 px-2">Posted June 9th, 2020</h6>
                    </div>
                </div>
              </div>
              <div class="w-1/3 px-2 transition duration-350 ease-in-out bg-transparent hover:bg-transparent transform hover:-translate-y-1 hover:scale-105">
                <div class="h-100">
                    <div class="mt-2">
                        <a href="/blog/the-next-big-thing-in-vue-js">
                            <img class="rounded-t-lg" src="/img/1_VKOMtQZm5yZ0goTl1u623Q.png" alt="">    
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="/blog/the-next-big-thing-in-vue-js" class="text-lg font-semibold border-l-2 border-indigo-400 px-2 text-indigo-400 uppercase font-mono mt-2">The Next Big Thing In Vue.js</a>
                        <h6 class="text-blue-100 px-2">Posted June 7th, 2020</h6>
                    </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="px-2 mt-8">
            <div class="flex -mx-2">
              <div class="w-2/4 px-2">
                <div class="bg-gray-400 h-12"></div>
              </div>
              <div class="w-1/4 px-2">
                <div class="bg-gray-350 h-12"></div>
              </div>
              <div class="w-1/4 px-2">
                <div class="bg-gray-500 h-12"></div>
              </div>
            </div>
          </div> --}}
    </div>
@endsection

