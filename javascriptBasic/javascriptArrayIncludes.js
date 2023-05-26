const javascriptArrayIncludes = () => {
    console.log('Array.includes() in JavaScript\n\n');

    const whatIsYourName = (name) => {
        const myFriends = ['Tony', 'Ezekiel'];
        console.log(`name: ${name}`);

        if (myFriends.includes(name)) {
            console.log(`F You ${name}!\n\n`);
            return;
        }
        console.log(`Hi ${name}!\n\n`);
    };

    whatIsYourName('Alisa');
    whatIsYourName('Tony');
    whatIsYourName('Ezekiel');
};

export default javascriptArrayIncludes;
