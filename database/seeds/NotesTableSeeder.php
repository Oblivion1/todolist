<?php

use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->insert([
            [
                'title' => 'NOTE 1',
                'content' => 'Aliquip labore veniam ea sunt eu fugiat nisi nisi nostrud labore cillum adipisicing. Sint veniam incididunt deserunt sunt reprehenderit velit est exercitation cupidatat ipsum eiusmod commodo velit. Qui cillum nostrud velit excepteur mollit aliquip eu eiusmod commodo sit aliqua eu. Commodo velit ipsum sunt nisi dolor irure ad anim pariatur sunt velit qui et pariatur. Culpa ex incididunt ipsum exercitation ex do minim eiusmod est dolore mollit ad quis cillum. Commodo qui quis et exercitation consequat irure consequat aute elit excepteur proident pariatur. Adipisicing ex sint ipsum consectetur ex nostrud ullamco. Ex ullamco officia ex reprehenderit et incididunt in. Ea ut aute ullamco magna aliquip id. Id pariatur est ullamco consequat duis aute reprehenderit esse eu consequat aliquip non esse. Lorem do voluptate qui sint labore ipsum amet incididunt mollit ad id. Ipsum cillum in incididunt amet enim occaecat laboris excepteur proident pariatur. Id est ullamco consectetur cillum ut qui aliquip. Eiusmod magna laboris cillum anim in. Ipsum aliqua tempor occaecat ullamco deserunt reprehenderit cupidatat Lorem ex nulla. Velit ea nostrud proident cupidatat in culpa. Officia fugiat nisi anim est est ipsum culpa dolore exercitation. Dolore Lorem ipsum aute nisi velit incididunt exercitation tempor mollit anim cillum pariatur. Excepteur esse do esse laborum enim adipisicing ex eiusmod laboris excepteur sunt enim elit exercitation. Et exercitation consectetur irure magna id occaecat dolore id consectetur adipisicing in deserunt. Eu adipisicing Lorem do do nisi magna velit.',
                'duration' => 6000000,
                'complete' => false,
                'todolist_id' => 1,
                'uuid' => Uuid::generate(4)
            ], 
            [
                'title' => 'NOTE 2',
                'content' => 'Aliquip labore veniam ea sunt eu fugiat nisi nisi nostrud labore cillum adipisicing. Sint veniam incididunt deserunt sunt reprehenderit velit est exercitation cupidatat ipsum eiusmod commodo velit. Qui cillum nostrud velit excepteur mollit aliquip eu eiusmod commodo sit aliqua eu. Commodo velit ipsum sunt nisi dolor irure ad anim pariatur sunt velit qui et pariatur. Culpa ex incididunt ipsum exercitation ex do minim eiusmod est dolore mollit ad quis cillum. Commodo qui quis et exercitation consequat irure consequat aute elit excepteur proident pariatur. Adipisicing ex sint ipsum consectetur ex nostrud ullamco. Ex ullamco officia ex reprehenderit et incididunt in. Ea ut aute ullamco magna aliquip id. Id pariatur est ullamco consequat duis aute reprehenderit esse eu consequat aliquip non esse. Lorem do voluptate qui sint labore ipsum amet incididunt mollit ad id. Ipsum cillum in incididunt amet enim occaecat laboris excepteur proident pariatur. Id est ullamco consectetur cillum ut qui aliquip. Eiusmod magna laboris cillum anim in. Ipsum aliqua tempor occaecat ullamco deserunt reprehenderit cupidatat Lorem ex nulla. Velit ea nostrud proident cupidatat in culpa. Officia fugiat nisi anim est est ipsum culpa dolore exercitation. Dolore Lorem ipsum aute nisi velit incididunt exercitation tempor mollit anim cillum pariatur. Excepteur esse do esse laborum enim adipisicing ex eiusmod laboris excepteur sunt enim elit exercitation. Et exercitation consectetur irure magna id occaecat dolore id consectetur adipisicing in deserunt. Eu adipisicing Lorem do do nisi magna velit.',
                'duration' => 3422,
                'complete' => true,
                'todolist_id' => 1,
                'uuid' => Uuid::generate(4)
            ], 
            [
                'title' => 'NOTE 3',
                'content' => 'Aliquip labore veniam ea sunt eu fugiat nisi nisi nostrud labore cillum adipisicing. Sint veniam incididunt deserunt sunt reprehenderit velit est exercitation cupidatat ipsum eiusmod commodo velit. Qui cillum nostrud velit excepteur mollit aliquip eu eiusmod commodo sit aliqua eu. Commodo velit ipsum sunt nisi dolor irure ad anim pariatur sunt velit qui et pariatur. Culpa ex incididunt ipsum exercitation ex do minim eiusmod est dolore mollit ad quis cillum. Commodo qui quis et exercitation consequat irure consequat aute elit excepteur proident pariatur. Adipisicing ex sint ipsum consectetur ex nostrud ullamco. Ex ullamco officia ex reprehenderit et incididunt in. Ea ut aute ullamco magna aliquip id. Id pariatur est ullamco consequat duis aute reprehenderit esse eu consequat aliquip non esse. Lorem do voluptate qui sint labore ipsum amet incididunt mollit ad id. Ipsum cillum in incididunt amet enim occaecat laboris excepteur proident pariatur. Id est ullamco consectetur cillum ut qui aliquip. Eiusmod magna laboris cillum anim in. Ipsum aliqua tempor occaecat ullamco deserunt reprehenderit cupidatat Lorem ex nulla. Velit ea nostrud proident cupidatat in culpa. Officia fugiat nisi anim est est ipsum culpa dolore exercitation. Dolore Lorem ipsum aute nisi velit incididunt exercitation tempor mollit anim cillum pariatur. Excepteur esse do esse laborum enim adipisicing ex eiusmod laboris excepteur sunt enim elit exercitation. Et exercitation consectetur irure magna id occaecat dolore id consectetur adipisicing in deserunt. Eu adipisicing Lorem do do nisi magna velit.',
                'duration' => 4000000,            
                'complete' => true,
                'todolist_id' => 2,
                'uuid' => Uuid::generate(4)
            ], 
            [
                'title' => 'NOTE 4',
                'content' => 'Aliquip labore veniam ea sunt eu fugiat nisi nisi nostrud labore cillum adipisicing. Sint veniam incididunt deserunt sunt reprehenderit velit est exercitation cupidatat ipsum eiusmod commodo velit. Qui cillum nostrud velit excepteur mollit aliquip eu eiusmod commodo sit aliqua eu. Commodo velit ipsum sunt nisi dolor irure ad anim pariatur sunt velit qui et pariatur. Culpa ex incididunt ipsum exercitation ex do minim eiusmod est dolore mollit ad quis cillum. Commodo qui quis et exercitation consequat irure consequat aute elit excepteur proident pariatur. Adipisicing ex sint ipsum consectetur ex nostrud ullamco. Ex ullamco officia ex reprehenderit et incididunt in. Ea ut aute ullamco magna aliquip id. Id pariatur est ullamco consequat duis aute reprehenderit esse eu consequat aliquip non esse. Lorem do voluptate qui sint labore ipsum amet incididunt mollit ad id. Ipsum cillum in incididunt amet enim occaecat laboris excepteur proident pariatur. Id est ullamco consectetur cillum ut qui aliquip. Eiusmod magna laboris cillum anim in. Ipsum aliqua tempor occaecat ullamco deserunt reprehenderit cupidatat Lorem ex nulla. Velit ea nostrud proident cupidatat in culpa. Officia fugiat nisi anim est est ipsum culpa dolore exercitation. Dolore Lorem ipsum aute nisi velit incididunt exercitation tempor mollit anim cillum pariatur. Excepteur esse do esse laborum enim adipisicing ex eiusmod laboris excepteur sunt enim elit exercitation. Et exercitation consectetur irure magna id occaecat dolore id consectetur adipisicing in deserunt. Eu adipisicing Lorem do do nisi magna velit.',
                'duration' => 5000000,
                'complete' => false,
                'todolist_id' => 1,
                'uuid' => Uuid::generate(4)
            ], 
            [
                'title' => 'NOTE 5',
                'content' => 'Aliquip labore veniam ea sunt eu fugiat nisi nisi nostrud labore cillum adipisicing. Sint veniam incididunt deserunt sunt reprehenderit velit est exercitation cupidatat ipsum eiusmod commodo velit. Qui cillum nostrud velit excepteur mollit aliquip eu eiusmod commodo sit aliqua eu. Commodo velit ipsum sunt nisi dolor irure ad anim pariatur sunt velit qui et pariatur. Culpa ex incididunt ipsum exercitation ex do minim eiusmod est dolore mollit ad quis cillum. Commodo qui quis et exercitation consequat irure consequat aute elit excepteur proident pariatur. Adipisicing ex sint ipsum consectetur ex nostrud ullamco. Ex ullamco officia ex reprehenderit et incididunt in. Ea ut aute ullamco magna aliquip id. Id pariatur est ullamco consequat duis aute reprehenderit esse eu consequat aliquip non esse. Lorem do voluptate qui sint labore ipsum amet incididunt mollit ad id. Ipsum cillum in incididunt amet enim occaecat laboris excepteur proident pariatur. Id est ullamco consectetur cillum ut qui aliquip. Eiusmod magna laboris cillum anim in. Ipsum aliqua tempor occaecat ullamco deserunt reprehenderit cupidatat Lorem ex nulla. Velit ea nostrud proident cupidatat in culpa. Officia fugiat nisi anim est est ipsum culpa dolore exercitation. Dolore Lorem ipsum aute nisi velit incididunt exercitation tempor mollit anim cillum pariatur. Excepteur esse do esse laborum enim adipisicing ex eiusmod laboris excepteur sunt enim elit exercitation. Et exercitation consectetur irure magna id occaecat dolore id consectetur adipisicing in deserunt. Eu adipisicing Lorem do do nisi magna velit.',
                'duration' => 35222,
                'complete' => false,
                'todolist_id' => 1,
                'uuid' => Uuid::generate(4)
            ], 
            [
                'title' => 'NOTE 6',
                'content' => 'Aliquip labore veniam ea sunt eu fugiat nisi nisi nostrud labore cillum adipisicing. Sint veniam incididunt deserunt sunt reprehenderit velit est exercitation cupidatat ipsum eiusmod commodo velit. Qui cillum nostrud velit excepteur mollit aliquip eu eiusmod commodo sit aliqua eu. Commodo velit ipsum sunt nisi dolor irure ad anim pariatur sunt velit qui et pariatur. Culpa ex incididunt ipsum exercitation ex do minim eiusmod est dolore mollit ad quis cillum. Commodo qui quis et exercitation consequat irure consequat aute elit excepteur proident pariatur. Adipisicing ex sint ipsum consectetur ex nostrud ullamco. Ex ullamco officia ex reprehenderit et incididunt in. Ea ut aute ullamco magna aliquip id. Id pariatur est ullamco consequat duis aute reprehenderit esse eu consequat aliquip non esse. Lorem do voluptate qui sint labore ipsum amet incididunt mollit ad id. Ipsum cillum in incididunt amet enim occaecat laboris excepteur proident pariatur. Id est ullamco consectetur cillum ut qui aliquip. Eiusmod magna laboris cillum anim in. Ipsum aliqua tempor occaecat ullamco deserunt reprehenderit cupidatat Lorem ex nulla. Velit ea nostrud proident cupidatat in culpa. Officia fugiat nisi anim est est ipsum culpa dolore exercitation. Dolore Lorem ipsum aute nisi velit incididunt exercitation tempor mollit anim cillum pariatur. Excepteur esse do esse laborum enim adipisicing ex eiusmod laboris excepteur sunt enim elit exercitation. Et exercitation consectetur irure magna id occaecat dolore id consectetur adipisicing in deserunt. Eu adipisicing Lorem do do nisi magna velit.',
                'duration' => 12414,
                'complete' => false,
                'todolist_id' => 1,
                'uuid' => Uuid::generate(4)
            ], 
            [
                'title' => 'NOTE 7',
                'content' => 'Aliquip labore veniam ea sunt eu fugiat nisi nisi nostrud labore cillum adipisicing. Sint veniam incididunt deserunt sunt reprehenderit velit est exercitation cupidatat ipsum eiusmod commodo velit. Qui cillum nostrud velit excepteur mollit aliquip eu eiusmod commodo sit aliqua eu. Commodo velit ipsum sunt nisi dolor irure ad anim pariatur sunt velit qui et pariatur. Culpa ex incididunt ipsum exercitation ex do minim eiusmod est dolore mollit ad quis cillum. Commodo qui quis et exercitation consequat irure consequat aute elit excepteur proident pariatur. Adipisicing ex sint ipsum consectetur ex nostrud ullamco. Ex ullamco officia ex reprehenderit et incididunt in. Ea ut aute ullamco magna aliquip id. Id pariatur est ullamco consequat duis aute reprehenderit esse eu consequat aliquip non esse. Lorem do voluptate qui sint labore ipsum amet incididunt mollit ad id. Ipsum cillum in incididunt amet enim occaecat laboris excepteur proident pariatur. Id est ullamco consectetur cillum ut qui aliquip. Eiusmod magna laboris cillum anim in. Ipsum aliqua tempor occaecat ullamco deserunt reprehenderit cupidatat Lorem ex nulla. Velit ea nostrud proident cupidatat in culpa. Officia fugiat nisi anim est est ipsum culpa dolore exercitation. Dolore Lorem ipsum aute nisi velit incididunt exercitation tempor mollit anim cillum pariatur. Excepteur esse do esse laborum enim adipisicing ex eiusmod laboris excepteur sunt enim elit exercitation. Et exercitation consectetur irure magna id occaecat dolore id consectetur adipisicing in deserunt. Eu adipisicing Lorem do do nisi magna velit.',
                'duration' => 86400,
                'complete' => false,
                'todolist_id' => 1,
                'uuid' => Uuid::generate(4)
            ]
        ]);
    }
}
