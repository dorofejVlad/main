<?php
$first_day = new DateTime('1990-01-01');
class Date {
    private $year;
    private $month;
    private $day;
    
    const DAYS_IN_MONTH = 22;
    const MONTHS_IN_YEAR = 13;
    
    public function __construct(int $year = 1, int $month = 1, int $day = 1) {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }
 
    public function addDays(int $days) {
        $this->day += $days;
 
        while ($this->day > self::DAYS_IN_MONTH) {
            $this->addMonths(1);
            $this->day -= self::DAYS_IN_MONTH;
        }
    }
    
    public function addMonths(int $months) {
        $this->month += $months;
        
        while ($this->month > self::MONTHS_IN_YEAR) {
            $this->addYears(1);
            $this->month -= self::MONTHS_IN_YEAR;
        }
    }
    
    public function addYears(int $years) {
        $this->year++;
    }
    
    public function getDate() {
        return $this->year.' '.$this->month.' '.$this->day;
    }
}
 
 function getDay(){
    $week_days = array(
        'Sunday', 'Monday', 'Tuesday', 'Wednesday',
        'Thrusday', 'Friday', 'Saturday'
    );
    return $week_days[(date('w'))];
}
echo "Today:" . getDay() . ;
 echo date('w', mktime(0, 0, 0, 11, 17, 13));
for ($i = 0; $i <= 50; $i++) {
    $date = new Date(2018, 1, 1);
    $date->addDays($i);
    echo $i.' | '.$date->getDate()."\n";
	
}  ?>