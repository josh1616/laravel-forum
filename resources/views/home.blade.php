<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div style="max-width: 1240px" class="py-16 mx-auto px-12">
        <h1 class="text-3xl	text-black mb-12">Your feed</h1>
        <div class="flex">
            <div class="w-2/3">
                <div class="flex flex-col">
                    <div class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col ease-linear duration-150 hover:border-black hover:cursor-pointer">
                        <div class="flex items-center mb-4">
                            <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
                            <p class="inline-block text-black text-base mr-2.5">Joshua Richardson</p>
                            <p class="inline-block text-gray-800 text-base">19/10/2023</p>
                        </div>
                        <p class="text-2xl text-black mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            exercitation ullamco laboris nisi ut aliquip ex ea commo.
                        </p>
                        <div class="flex">
                            <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
                                <img src="\img\upvote.svg" alt="upvote" class="mr-2">
                                <p>3</p>
                            </div>
                            <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
                                <img src="\img\downvote.svg" alt="upvote" class="mr-2">
                                <p>2</p>
                            </div>
                            <div class="py-1 px-4 bg-gray-200 rounded-full flex">
                                <img src="\img\message.svg" alt="message icon" class="mr-2">
                                <p class="text-black text-base">3 comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col ease-linear duration-150 hover:border-black hover:cursor-pointer">
                        <div class="flex items-center mb-4">
                            <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
                            <p class="inline-block text-black text-base mr-2.5">Joshua Richardson</p>
                            <p class="inline-block text-gray-800 text-base">19/10/2023</p>
                        </div>
                        <p class="text-2xl text-black mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            exercitation ullamco laboris nisi ut aliquip ex ea commo.
                        </p>
                        <div class="flex">
                            <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
                                <img src="\img\upvote.svg" alt="upvote" class="mr-2">
                                <p>3</p>
                            </div>
                            <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
                                <img src="\img\downvote.svg" alt="upvote" class="mr-2">
                                <p>2</p>
                            </div>
                            <div class="py-1 px-4 bg-gray-200 rounded-full flex">
                                <img src="\img\message.svg" alt="message icon" class="mr-2">
                                <p class="text-black text-base">3 comments</p>
                            </div>
                        </div>
                    </div>
                    <div class="border border-1 border-gray-300 rounded-3xl p-6 mb-8 max-w-3xl flex flex-col ease-linear duration-150 hover:border-black hover:cursor-pointer">
                        <div class="flex items-center mb-4">
                            <img src="\img\profile-pic.png" alt="profile picture" class="mr-2.5">
                            <p class="inline-block text-black text-base mr-2.5">Joshua Richardson</p>
                            <p class="inline-block text-gray-800 text-base">19/10/2023</p>
                        </div>
                        <p class="text-2xl text-black mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            incididunt ut labore et dolore magna aliqua. Ut enim ad
                            exercitation ullamco laboris nisi ut aliquip ex ea commo.
                        </p>
                        <div class="mb-4 max-h-80 overflow-y-hidden rounded-2xl w-full">
                            <img src="\img\post-demo-picture.jpg" alt="picture related to post" class="rounded-2xl w-full">
                        </div>
                        <div class="flex">
                            <div class="py-1 px-4 bg-green-200 rounded-full flex mr-3.5">
                                <img src="\img\upvote.svg" alt="upvote" class="mr-2">
                                <p>3</p>
                            </div>
                            <div class="py-1 px-4 bg-red-200 rounded-full flex mr-3.5">
                                <img src="\img\downvote.svg" alt="upvote" class="mr-2">
                                <p>2</p>
                            </div>
                            <div class="py-1 px-4 bg-gray-200 rounded-full flex">
                                <img src="\img\message.svg" alt="message icon" class="mr-2">
                                <p class="text-black text-base">3 comments</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="w-1/3">
                <div class="flex flex-col items-end sticky top-4">
                    <div class="text-left">
                        <h2 class="text-black text-3xl mb-8">Popular tags</h2>
                        <h3 class="text-gray-400 text-2xl mb-4 text-left">Gaming</h3>
                        <h3 class="text-gray-400 text-2xl mb-4 text-left">Technology</h3>
                        <h3 class="text-gray-400 text-2xl mb-4 text-left">Music</h3>
                        <h3 class="text-gray-400 text-2xl mb-4 text-left">Art</h3>
                        <h3 class="text-gray-400 text-2xl mb-4 text-left">Politics</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>