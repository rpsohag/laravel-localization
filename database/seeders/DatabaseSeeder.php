<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageTranslation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Page::create([
            "title"=> "about",
        ]);
        PageTranslation::create([
            "title"=> "About",
            "page_id" => "1",
            "body" => "<p>What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <br>
        <p>
            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
        <br>
        <p>
            
            Where does it come from?
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.</p>",
            "locale" => "en",
        ]);
        PageTranslation::create([
            "title"=> "About",
            "page_id" => "1",
            "body" => "<p>লোরেম ইপসাম কি?
                    Lorem Ipsum হল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য। লোরেম ইপসাম 1500 এর দশক থেকে শিল্পের মানক ডামি টেক্সট হয়েছে, যখন একটি অজানা প্রিন্টার টাইপের একটি গ্যালি নিয়েছিল এবং একটি টাইপ নমুনা বই তৈরি করতে এটিকে স্ক্র্যাম্বল করেছিল। এটি শুধুমাত্র পাঁচ শতক নয়, ইলেকট্রনিক টাইপসেটিং-এ লাফিয়েও টিকে আছে, যা অপরিহার্যভাবে অপরিবর্তিত রয়েছে। এটি 1960-এর দশকে লোরেম ইপসাম প্যাসেজ সম্বলিত লেট্রাসেট শীট প্রকাশের মাধ্যমে এবং আরও সম্প্রতি লোরেম ইপসামের সংস্করণ সহ অ্যালডাস পেজমেকারের মতো ডেস্কটপ প্রকাশনা সফ্টওয়্যারের মাধ্যমে জনপ্রিয় হয়েছিল।
                    </p>
                    <br>
                    <p>
                    কেন আমরা এটা ব্যবহার করব?
                    এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে 'কন্টেন্ট এখানে, এখানে বিষয়বস্তু' ব্যবহার করার বিপরীতে অক্ষরের কম-বেশি স্বাভাবিক বন্টন রয়েছে, এটিকে পঠনযোগ্য ইংরেজির মতো দেখায়। অনেক ডেস্কটপ পাবলিশিং প্যাকেজ এবং ওয়েব পেজ এডিটররা এখন তাদের ডিফল্ট মডেল টেক্সট হিসেবে Lorem Ipsum ব্যবহার করে এবং 'lorem ipsum'-এর জন্য একটি অনুসন্ধান অনেক ওয়েব সাইটকে তাদের শৈশবকালে উন্মোচিত করবে। বছরের পর বছর ধরে বিভিন্ন সংস্করণ বিকশিত হয়েছে, কখনো দুর্ঘটনাক্রমে, কখনো উদ্দেশ্যমূলক (ইনজেক্টেড হিউমার এবং এর মতো)।
                    </p>
                    <br>
                    <p>

                    এটা কোথা থেকে আসে?
                    জনপ্রিয় বিশ্বাসের বিপরীতে, Lorem Ipsum কেবল এলোমেলো পাঠ্য নয়। এটি 45 খ্রিস্টপূর্বাব্দের ধ্রুপদী ল্যাটিন সাহিত্যের একটি অংশে শিকড় রয়েছে, এটি 2000 বছরেরও বেশি পুরানো। ভার্জিনিয়ার হ্যাম্পডেন-সিডনি কলেজের একজন ল্যাটিন অধ্যাপক রিচার্ড ম্যাকক্লিনটক লোরেম ইপসাম প্যাসেজ থেকে আরও অস্পষ্ট ল্যাটিন শব্দ কনসেক্টুরের সন্ধান করেছিলেন এবং শাস্ত্রীয় সাহিত্যে এই শব্দের উদ্ধৃতিগুলির মধ্য দিয়ে গিয়ে সন্দেহাতীত উত্সটি আবিষ্কার করেছিলেন। লোরেম ইপসাম 45 খ্রিস্টপূর্বাব্দে লেখা সিসেরোর 'ডি ফিনিবাস বোনোরাম এট ম্যালোরাম' (দ্য এক্সট্রিমস অফ গুড অ্যান্ড ইভিল) এর বিভাগ 1.10.32 এবং 1.10.33 থেকে এসেছে। এই বইটি নৈতিকতার তত্ত্বের উপর একটি গ্রন্থ, রেনেসাঁর সময় খুব জনপ্রিয়। Lorem Ipsum এর প্রথম লাইন, 'Lorem ipsum dolor sit amet..', 1.10.32 সেকশনের একটি লাইন থেকে এসেছে।</p>",
            "locale" => "bn",
        ]);
        PageTranslation::create([
            "title"=> "About",
            "page_id" => "1",
            "body" => "<p>什么是 Lorem Ipsum？
                Lorem Ipsum 只是印刷排版行业的虚拟文本。自 1500 年代以来，Lorem Ipsum 一直是该行业的标准虚拟文本，当时一位不知名的印刷工从一页排版稿中取出一页并将其打乱，制作成一本样本书。它不仅在五个世纪中存留下来，而且在电子排版中也基本保持不变。它在 20 世纪 60 年代因 Letraset 纸张发布而流行起来，纸张中包含 Lorem Ipsum 段落，最近，Aldus PageMaker 等桌面出版软件也包含各种版本的 Lorem Ipsum。
                </p>
                <br>
                <p>
                我们为什么要使用它？
                一个长期存在的事实是，读者在查看页面布局时会被可读的内容分散注意力。使用 Lorem Ipsum 的目的是，它具有或多或少正常的字母分布，而不是使用“内容在这里，内容在这里”，使其看起来像可读的英语。许多桌面出版软件包和网页编辑器现在使用 Lorem Ipsum 作为其默认模型文本，搜索“lorem ipsum”会发现许多仍处于起步阶段的网站。多年来，各种版本不断演变，有时是偶然的，有时是故意的（注入幽默等）。
                </p>
                <br>
                <p>

                它从何而来？
                与普遍的看法相反，Lorem Ipsum 并不是简单的随机文本。它源于公元前 45 年的一部古典拉丁文学，已有 2000 多年的历史。弗吉尼亚州汉普登-悉尼学院的拉丁语教授理查德·麦克林托克从 Lorem Ipsum 的一段文字中查找了一个比较晦涩的拉丁语单词 consectetur，并查阅了古典文学中对该词的引用，发现了不容置疑的来源。Lorem Ipsum 出自西塞罗于公元前 45 年撰写的《de Finibus Bonorum et Malorum》（善恶的极值）第 1.10.32 和 1.10.33 节。这本书是一篇关于伦理学理论的论文，在文艺复兴时期非常流行。Lorem Ipsum 的第一行“Lorem ipsum dolor sit amet..”来自第 1.10.32 节中的一行。</p>",
            "locale" => "ch",
        ]);
    }
}
