<?php
class UserSeeder extends Seeder {
    public function run() {
        Eloquent::unguard();
        
        //User Bob (User 1)
        $user = new User;
        $user->username = 'Bob@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Bob Ross';
        $user->save();
        
        //User John (User 2)
        $user = new User;
        $user->username = 'John@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'John Smith';
        $friend = User::find(1);
        //$friend->friends()->save($user);
        $user->friends()->associate($friend);
        $user->save();
        
        //User Tom (User 3)
        $user = new User;
        $user->username = 'Tom@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Tom Peterson';
        $user->save();
        
        //User Peter (User 4)
        $user = new User;
        $user->username = 'Peter@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Peter File';
        $user->save();
        
        //User Hugh (User 5)
        $user = new User;
        $user->username = 'Hugh@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Hugh Jazz';
        $user->save();
        
        //User Ben (User 6)
        $user = new User;
        $user->username = 'Ben@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Ben Dover';
        $user->save();
        
        //User Mike (User 7)
        $user = new User;
        $user->username = 'Mike@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Mike Hunt';
        $user->save();
        
        //User Tony (User 8)
        $user = new User;
        $user->username = 'Tony@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Tony Stark';
        $user->save();
        
        //User Sana (User 9)
        $user = new User;
        $user->username = 'Sana@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Sana Stark';
        $friend = User::find(8);
        $user->friends()->associate($friend);
        $user->save();
        
        //User Adolf (User 10)
        $user = new User;
        $user->username = 'Adolf@a.org';
        $user->password = '1234';
        $user->birthdate = date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
        $user->fullname = 'Adolf Hitler';
        $friend = User::find(1);
        $user->friends()->associate($friend);
        $friend = User::find(2);
        $user->friends()->associate($friend);
        $friend = User::find(3);
        $user->friends()->associate($friend);
        $friend = User::find(4);
        $user->friends()->associate($friend);
        $friend = User::find(5);
        $user->friends()->associate($friend);
        $friend = User::find(6);
        $user->friends()->associate($friend);
        $friend = User::find(7);
        $user->friends()->associate($friend);
        $friend = User::find(8);
        $user->friends()->associate($friend);
        $friend = User::find(9);
        $user->friends()->associate($friend);
        $user->save();
    }
}
