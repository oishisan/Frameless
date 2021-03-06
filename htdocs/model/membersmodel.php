<?php

    // There is no real convention for what models are supposed to look like. Basically it's just an interface to your
    // database, think of it as software stored procedures written in php.
    class MembersModel
    {
        private $members;

        
        // For simplicity I'm not using any mysql models, and the "database" is just this array
        function __construct()
        {
            $this->members = array (
                                        array('name' => 'clueless', 'site' => 'https://thunked.org',     'lang' => 'C'),
                                        array('name' => 'drusepth', 'site' => 'http://www.drusepth.net', 'lang' => 'Ruby'),
                                        array('name' => 'MatteWan', 'site' => 'http://www.osst.co.uk',   'lang' => 'Php'),
                                        array('name' => 'skier_',   'site' => 'http://skier.su',         'lang' => 'C'),
                                        array('name' => 'izua',     'site' => 'http://izua.ro',          'lang' => 'C'),
                                        array('name' => 'rundata',  'site' => 'http://illegalroot.net',  'lang' => 'Python'),
                                        array('name' => 'zref',     'site' => 'http://zeroreference.com','lang' => 'Ruby'),
                                   );
        }

        // Return all members in the list
        public function GetAll()
        {
            return $this->members; 
        }

        // Return a few members in the list
        public function GetRange($start, $len)
        {
            return array_slice($this->members, $start, $len);
        }

        // Get total # of members
        public function Count()
        {
            return count($this->members);
        }
        
        // Get one member
        public function GetUser($name)
        {
            foreach ($this->members as $member)
            {
                if($member['name'] == $name)
                    return $member;
            }
            return false;
        }
    };
?>
