class Elevator {
    constructor(num, flrs, curFlr) {
        this.number = num;
        this.floors = flrs;
        this.currentFloor = curFlr;  
    } 

    howHigh () { 
        console.log('Elevator is ', this.floors - this.currentFloor, ' floors from the Penthouse');
    }

}
