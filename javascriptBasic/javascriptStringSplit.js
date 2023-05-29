const javascriptStringSplit = () => {
    console.log('Split String in JavaScript\n\n');

    let text = null;
    let splitter = null;
    let textSplitted = null;
    let textSplittedFormatted = null;

    text = 'foo.bar.baz';
    splitter = '.';
    textSplitted = text.split(splitter);
    textSplittedFormatted = JSON.stringify(textSplitted);
    console.log(`"${text}" splitted by "${splitter}": ${textSplittedFormatted}\n\n`);
    // "foo.bar.baz" splitted by ".": ["foo","bar","baz"]

    text = 'JavaScript, Python, PHP';
    splitter = ', ';
    textSplitted = text.split(splitter);
    textSplittedFormatted = JSON.stringify(textSplitted);
    console.log(`"${text}" splitted by "${splitter}": ${textSplittedFormatted}`);
    // "JavaScript, Python, PHP" splitted by ", ": ["JavaScript","Python","PHP"]
};

export default javascriptStringSplit;
