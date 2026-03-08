<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacts = [
            [
                'id' => 1,
                'name' => 'Tatianna Bourelle',
                'email' => 'bouretm@prodrivenbrands.com',
                'phone' => '6303068234',
                'message' => 'My name is Tatianna, and I\'m reaching out from Werner Co/ ProDriven Global, located in Itasca. We\'re planning our annual food truck corporate event on Wednesday, July 23rd, and we\'re interested in having your food truck join us. This will be a dinner event beginning about 430-5pm. We will host approximately 60-70 people, and we\'re aiming to have 4-5 trucks offering appetizer or small plate food options (rather than full size meals). However, we do want an icecream truck! Please let me know if you are avaiable.',
                'status' => 'unread',
                'created_at' => '2025-05-19 18:12:12',
                'updated_at' => '2025-05-19 18:12:12'
            ],
            [
                'id' => 2,
                'name' => 'Lisa Jene collins',
                'email' => 'lisa.collins@northwestern.edu',
                'phone' => '8474671002',
                'message' => 'we host each year two ice cream socials for staff and we would like to know what the costs would be for a truck on our chicago campus and evanston campus for two hours each on different days in july (14th-31st, would be m-f, not on weekend) to serve around 250-300 ice cream servings for our staff. our staff advisory board members would be present while the truck is onsite at all times to coordinate any needs. what are your recommendations on lenght of time for the truck to be at each location and do we have options for the ice cream treats that will be available? your time in further coordination especially with an estimated costs so we can manage these events is much appreciated.',
                'status' => 'unread',
                'created_at' => '2025-05-20 17:33:43',
                'updated_at' => '2025-05-20 17:33:43'
            ],
            [
                'id' => 3,
                'name' => 'Melody Gomez',
                'email' => 'melodyg26@gmail.com',
                'phone' => '7732301916',
                'message' => 'We are hosting a block parth on 7/27 on rockwell and grand',
                'status' => 'unread',
                'created_at' => '2025-06-04 18:57:02',
                'updated_at' => '2025-06-04 18:57:02'
            ],
            [
                'id' => 4,
                'name' => 'Jamie Norusis',
                'email' => 'schmidt1225@gmail.com',
                'phone' => '6302221954',
                'message' => 'June 14 at 5 pm for about 40 people on harrison ave in wheaton',
                'status' => 'unread',
                'created_at' => '2025-06-05 00:36:13',
                'updated_at' => '2025-06-05 00:36:13'
            ],
            [
                'id' => 5,
                'name' => 'Lidia Spaho',
                'email' => 'spaho88@gmail.com',
                'phone' => '6303638223',
                'message' => 'July 27 at cantigny park - 200 people picnic',
                'status' => 'unread',
                'created_at' => '2025-06-09 16:48:15',
                'updated_at' => '2025-06-09 16:48:15'
            ],
            [
                'id' => 6,
                'name' => 'Vinny Criscione',
                'email' => 'vcriscione@marqnet.com',
                'phone' => '3125395117',
                'message' => 'Interested in resident event in st charles, ascend st charles apartment complex, 400 apartment community and would like ice cream truck for our residents by the pool in june for an hour or two',
                'status' => 'unread',
                'created_at' => '2025-06-10 16:22:36',
                'updated_at' => '2025-06-10 16:22:36'
            ],
            [
                'id' => 7,
                'name' => 'Lazaro Negro',
                'email' => 'Laz.negro@hotmail.com',
                'phone' => '6302004867',
                'message' => 'Is there a MINIMUM count? Whats yhe cost?',
                'status' => 'unread',
                'created_at' => '2025-06-11 15:29:33',
                'updated_at' => '2025-06-11 15:29:33'
            ],
            [
                'id' => 8,
                'name' => 'Megan Lindberg',
                'email' => 'maxtheeffect@gmail.com',
                'phone' => '3125459379',
                'message' => 'We are renting butterfield park dis pool on 7/26 at night. My son is disbaled and doesnt eat food but can eat ice cream. So we wanr to rent a truck.',
                'status' => 'unread',
                'created_at' => '2025-06-21 16:24:22',
                'updated_at' => '2025-06-21 16:24:22'
            ],
            [
                'id' => 9,
                'name' => 'Chloe Hopper Catugy',
                'email' => 'catugyc@gmail.com',
                'phone' => '6306770867',
                'message' => 'Pool party on June 28th for 25 people',
                'status' => 'unread',
                'created_at' => '2025-06-26 19:58:04',
                'updated_at' => '2025-06-26 19:58:04'
            ],
            [
                'id' => 10,
                'name' => 'Meg pezl',
                'email' => 'megaphree@yahoo.com',
                'phone' => '6307504897',
                'message' => '20 or more people carol stream tomorrow 7/2 8pm',
                'status' => 'unread',
                'created_at' => '2025-07-01 21:52:32',
                'updated_at' => '2025-07-01 21:52:32'
            ],
            [
                'id' => 11,
                'name' => 'Kellie',
                'email' => 'kellielneris@outlook.com',
                'phone' => '6302006977',
                'message' => 'We are located in oswego. Do you have a truck that comes this way? Birthday party september 6th',
                'status' => 'unread',
                'created_at' => '2025-07-05 20:54:23',
                'updated_at' => '2025-07-05 20:54:23'
            ],
            [
                'id' => 12,
                'name' => 'Robin schweitzer',
                'email' => 'squiggledoop@comcast.net',
                'phone' => '6309035002',
                'message' => 'grad party',
                'status' => 'unread',
                'created_at' => '2025-07-08 22:08:50',
                'updated_at' => '2025-07-08 22:08:50'
            ],
            [
                'id' => 13,
                'name' => 'Debbie Hansen',
                'email' => 'dhansen@ballhort.com',
                'phone' => '6303086986',
                'message' => 'Corporate event during the day. looking foR 1:30 ON fRIDAY 7/18 eLBURN LOCATION',
                'status' => 'unread',
                'created_at' => '2025-07-10 13:54:06',
                'updated_at' => '2025-07-10 13:54:06'
            ],
            [
                'id' => 14,
                'name' => 'tim ayers',
                'email' => '5150mit@gmail.com',
                'phone' => '8153212188',
                'message' => 'having concert in backyard w maybe 80 people',
                'status' => 'unread',
                'created_at' => '2025-07-13 20:14:17',
                'updated_at' => '2025-07-13 20:14:17'
            ],
            [
                'id' => 15,
                'name' => 'Xingxing',
                'email' => 'xingxing.zhang@northwestern.edu',
                'phone' => '2139042330',
                'message' => 'Northwestern',
                'status' => 'unread',
                'created_at' => '2025-07-17 17:35:45',
                'updated_at' => '2025-07-17 17:35:45'
            ],
            [
                'id' => 16,
                'name' => 'Siqi wu',
                'email' => 'siqi.wu@northwestern.edu',
                'phone' => '7736738239',
                'message' => 'NORTHWESTERN University',
                'status' => 'unread',
                'created_at' => '2025-07-17 17:35:57',
                'updated_at' => '2025-07-17 17:35:57'
            ],
            [
                'id' => 17,
                'name' => 'Taufeeque Ali',
                'email' => 'taufeeque.ali@northwestern.edu',
                'phone' => '4142434145',
                'message' => 'Fun fun too much fun',
                'status' => 'unread',
                'created_at' => '2025-07-17 17:38:26',
                'updated_at' => '2025-07-17 17:38:26'
            ],
            [
                'id' => 18,
                'name' => 'Jennifer Colbert',
                'email' => 'JenniferEColbert@gmail.com',
                'phone' => '6307096473',
                'message' => 'birthday party in glen ellyn on Aug. 10 @ 11 a.m.',
                'status' => 'unread',
                'created_at' => '2025-07-23 02:29:26',
                'updated_at' => '2025-07-23 02:29:26'
            ],
            [
                'id' => 19,
                'name' => 'The Reserve on Washington',
                'email' => 'thereserveonwashington@rtresi.com',
                'phone' => '6309460554',
                'message' => 'property event',
                'status' => 'unread',
                'created_at' => '2025-07-25 20:48:15',
                'updated_at' => '2025-07-25 20:48:15'
            ],
            [
                'id' => 20,
                'name' => 'Megan wick',
                'email' => 'meg1236@gmail.com',
                'phone' => '7086381420',
                'message' => 'Block party- probably around 30-40 people. Can people order and buy ice cream individually, or is there a fixed price?',
                'status' => 'unread',
                'created_at' => '2025-07-27 19:38:58',
                'updated_at' => '2025-07-27 19:38:58'
            ],
            [
                'id' => 21,
                'name' => 'Casey Bouton',
                'email' => 'caseyeharmon@gmail.com',
                'phone' => '6302999632',
                'message' => 'First day of school ice cream party. August 20th- 3:44-4:45',
                'status' => 'unread',
                'created_at' => '2025-07-28 00:48:05',
                'updated_at' => '2025-07-28 00:48:05'
            ],
            [
                'id' => 22,
                'name' => 'Ryan Freed',
                'email' => 'srefreed@gmail.com',
                'phone' => '6308535255',
                'message' => 'Block party - 30-50 people. August 9th',
                'status' => 'unread',
                'created_at' => '2025-08-02 03:42:24',
                'updated_at' => '2025-08-02 03:42:24'
            ],
            [
                'id' => 23,
                'name' => 'julie baranek',
                'email' => 'jsbaranek@gmail.com',
                'phone' => '6308163136',
                'message' => 'we have a block party this saturday 27w328 liberty street winfield il...We hear an ice cream truck around us but it never comes by our side of the tracks. wondered if you could swing around saturday sometime between 1 and 5pm? would be purchased on consumption. small party maybe 30 people thank you',
                'status' => 'unread',
                'created_at' => '2025-08-06 15:08:49',
                'updated_at' => '2025-08-06 15:08:49'
            ],
            [
                'id' => 24,
                'name' => 'Cruz Alanis',
                'email' => 'c.alanis5055@gmail.com',
                'phone' => '7084953571',
                'message' => '1st Birthday party',
                'status' => 'unread',
                'created_at' => '2025-08-08 23:58:18',
                'updated_at' => '2025-08-08 23:58:18'
            ],
            [
                'id' => 25,
                'name' => 'Alli Schultz',
                'email' => 'allitraven@gmail.com',
                'phone' => '8157610104',
                'message' => 'I was hoping to have a truck come by our casual block party in Glen Ellyn next month. Would this be possible and could everyone buy their own?',
                'status' => 'unread',
                'created_at' => '2025-08-17 22:38:36',
                'updated_at' => '2025-08-17 22:38:36'
            ],
            [
                'id' => 26,
                'name' => 'jori stevens',
                'email' => 'joricicale@gmail.com',
                'phone' => '7087722414',
                'message' => 'block party in lombard on september 20',
                'status' => 'unread',
                'created_at' => '2025-08-18 16:47:45',
                'updated_at' => '2025-08-18 16:47:45'
            ],
            [
                'id' => 27,
                'name' => 'Himanshu Varandani',
                'email' => 'himanshu.varandani@gmail.com',
                'phone' => '7732304527',
                'message' => 'Hello,\n\nWe are hosting a block party in Barrington on September 6. Are you guys available to send your ice cream truck that evening around 5:30 p.m.? I read about your special if one person is paying is that still available? please let me know the pricing details. We are expecting about 30 to 40 people\n\nThank you.',
                'status' => 'unread',
                'created_at' => '2025-08-18 23:41:12',
                'updated_at' => '2025-08-18 23:41:12'
            ],
            [
                'id' => 28,
                'name' => 'JASMINE KNOPP',
                'email' => 'JASMINE.KNOPP@BOOSTAUTOPARTS.COM',
                'phone' => '6303181972',
                'message' => 'we are hosting a company party on 09/17 at our warehouse for about 40-45 employees, it will be all on one check and paid at the end, approximate time would be 6-8pm.',
                'status' => 'unread',
                'created_at' => '2025-08-27 18:25:37',
                'updated_at' => '2025-08-27 18:25:37'
            ],
            [
                'id' => 29,
                'name' => 'Casey J Giglio',
                'email' => 'mcgarrcj@gmail.com',
                'phone' => '8152103960',
                'message' => 'block party Sept 6 4-9P - 1011 N MAIN ST NAPERVILLE IL',
                'status' => 'unread',
                'created_at' => '2025-09-03 02:07:08',
                'updated_at' => '2025-09-03 02:07:08'
            ],
            [
                'id' => 30,
                'name' => 'Darci mills',
                'email' => 'darcimills@yahoo.com',
                'phone' => '8477078575',
                'message' => 'Saturday, September 13 - afternoon block party',
                'status' => 'unread',
                'created_at' => '2025-09-06 18:07:32',
                'updated_at' => '2025-09-06 18:07:32'
            ],
            [
                'id' => 31,
                'name' => 'Kristin Clark',
                'email' => 'kpclark15@gmail.com',
                'phone' => '6302221167',
                'message' => 'looking for a one hour or less truck rental for a football team after practice next week 9/18 from 4:15 to 5:15 pm. Approximately 150 people',
                'status' => 'unread',
                'created_at' => '2025-09-09 15:13:47',
                'updated_at' => '2025-09-09 15:13:47'
            ],
            [
                'id' => 32,
                'name' => 'Orlando',
                'email' => 'orlando.pellot@sunnyside.shop',
                'phone' => '6308848061',
                'message' => 'Hello! were having a farmers market with our local merchants , itd be great if youd be able to come , we love ice cream !\nDate: Friday, October 3rd \nTime: 3:00pm - 7:00pm \nLocations: 2740 W 75th Street (Sunnyside\'s parking lot!)',
                'status' => 'unread',
                'created_at' => '2025-09-28 20:33:27',
                'updated_at' => '2025-09-28 20:33:27'
            ],
            [
                'id' => 33,
                'name' => 'Erin Roggetz',
                'email' => 'erindemars@yahoo.com',
                'phone' => '6305678195',
                'message' => 'Private family party approx 120-150 people 6/6/26 for a couple evening hours.',
                'status' => 'unread',
                'created_at' => '2025-10-27 18:27:05',
                'updated_at' => '2025-10-27 18:27:05'
            ],
        ];

        // Insert all contacts
        DB::table('contacts')->insert($contacts);
    }
}
