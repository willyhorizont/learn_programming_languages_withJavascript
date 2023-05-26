const javascriptDecoratorFunction = async () => {
    console.log('Decorator Function in JavaScript\n\n');

    const ONE_SECOND = 1_000;

    const sleep = (timeInSeconds) => new Promise((resolve) => setTimeout(resolve, timeInSeconds * ONE_SECOND));

    const measureFunctionExecutionTime = (aFunction) => {
        const wrapper = async () => {
            const startTimeInMilliseconds = Date.now();
            await aFunction();
            const finishTimeInMilliseconds = Date.now();
            const executionTimeInSeconds = (finishTimeInMilliseconds - startTimeInMilliseconds) / ONE_SECOND;
            console.log(`took ${executionTimeInSeconds} seconds to execute`);
        };
        return wrapper;
    };

    const dummyFunction1 = async () => {
        await sleep(3.7);
        console.log('dummyFunction1 ran');
    };

    const dummyFunction2 = async () => {
        await sleep(4.4);
        console.log('dummyFunction2 ran');
    };

    const dummyFunction3 = async () => {
        await sleep(1.6);
        console.log('dummyFunction3 ran');
    }

    const dummyFunction1Measured = measureFunctionExecutionTime(dummyFunction1);
    const dummyFunction2Measured = measureFunctionExecutionTime(dummyFunction2);
    const dummyFunction3Measured = measureFunctionExecutionTime(dummyFunction3);

    await dummyFunction1Measured();
    await dummyFunction2Measured();
    await dummyFunction3Measured();

    // dummyFunction1 ran
    // took 3.7 seconds to execute
    // dummyFunction2 ran
    // took 4.4 seconds to execute
    // dummyFunction3 ran
    // took 1.6 seconds to execute
};

export default javascriptDecoratorFunction;
