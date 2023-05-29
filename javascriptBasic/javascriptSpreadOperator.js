const javascriptSpreadOperator = () => {
    console.log('Array Spread Operator in JavaScript\n\n');

    const fruitsInMyRefrigerator = ['apple', 'mango', 'orange'];
    const fruitsIBoughtFromSupermarket = ['melon', 'banana'];
    const myFruits = [...fruitsInMyRefrigerator, ...fruitsIBoughtFromSupermarket];
    const myFruitsFormatted = JSON.stringify(myFruits);
    console.log(`my fruits: ${myFruitsFormatted}\n\n\n`);
    // my fruits: ["apple","mango","orange","melon","banana"]

    // ======================================================================================================================================================

    console.log('Object Spread Operator in JavaScript\n\n');

    const car = { 'wheels': 4, 'tires': 4 };

    const minivanCar = { ...car, 'doors': 4 };
    const minivanCarFormatted = JSON.stringify(minivanCar);
    console.log(`minivan car: ${minivanCarFormatted}\n\n`);
    // sports car: {"wheels":4,"tires":4,"doors":4}

    const sportsCar = { ...car, 'doors': 2 };
    const sportsCarFormatted = JSON.stringify(sportsCar);
    console.log(`sports car: ${sportsCarFormatted}\n\n`);
    // sports car: {"wheels":4,"tires":4,"doors":2}

    const redSportsCar = { ...car, 'doors': 2, 'color': 'red' };
    const redSportsCarFormatted = JSON.stringify(redSportsCar);
    console.log(`red sports car: ${redSportsCarFormatted}`);
    // red sports car: {"wheels":4,"tires":4,"doors":2,"color":"red"}
};

export default javascriptSpreadOperator;
