def python_composition():
    print('composition in python\n')

    preparing = lambda: {'prepare': lambda: print('Preparing...')}
    serving = lambda: {'serve': lambda: print('Ready to serve!\n\n')}
    buttering = lambda: {'butter': lambda: print('Buttering...')}
    addingFlatBread = lambda: {'addFlatBread': lambda: print('Adding flat bread...')}
    addingBunBread = lambda: {'addBunBread': lambda: print('Adding bun bread...')}
    addingLongBread = lambda: {'addLongBread': lambda: print('Adding long bread...')}
    addingSausage = lambda: {'addSausage': lambda: print('Adding sausage...')}
    addingHotSauce = lambda: {'addHotSauce': lambda: print('Adding hot sauce...')}
    addingKetchup = lambda: {'addKetchup': lambda: print('Adding ketchup...')}
    addingMayonnaise = lambda: {'addMayonnaise': lambda: print('Adding mayonnaise...')}
    addingMushroom = lambda: {'addMushroom': lambda: print('Adding mushroom...')}
    addingCheese = lambda: {'addCheese': lambda: print('Adding cheese...')}
    addingBeefPatty = lambda: {'addBeefPatty': lambda: print('Adding beef patty...')}
    addingEgg = lambda: {'addEgg': lambda: print('Adding egg...')}
    addingLettuce = lambda: {'addLettuce': lambda: print('Adding lettuce...')}
    addingTomatto = lambda: {'addTomatto': lambda: print('Adding tomatto...')}
    addingCucumber = lambda: {'addCucumber': lambda: print('Adding cucumber...')}
    addingOnion = lambda: {'addOnion': lambda: print('Adding onion...')}
    baking = lambda: {'bake': lambda: print('Baking...')}
    frying = lambda: {'fry': lambda: print('Frying...')}

    createOrdinaryPizza = lambda: {**preparing(), **addingFlatBread(), **buttering(), **serving()}
    createOrdinaryBurger = lambda: {**preparing(), **addingBunBread(), **buttering(), **serving()}
    createOrdinaryHotdog = lambda: {**preparing(), **addingLongBread(), **buttering(), **addingSausage(), **frying(), **addingHotSauce(), **addingKetchup(), **addingMayonnaise(), **serving()}
    createSausageCheesePizza = lambda: {**createOrdinaryPizza(), **addingSausage(), **frying(), **addingCheese(), **addingKetchup(), **addingHotSauce()}
    createSausageMushroomCheesePizza = lambda: {**createOrdinaryPizza(), **addingSausage(), **frying(), **addingMushroom(), **addingCheese(), **addingKetchup(), **addingHotSauce()}
    createSausageMushroomBeefCheesePizza = lambda: {**createOrdinaryPizza(), **addingSausage(), **frying(), **addingBeefPatty(), **frying(), **addingMushroom(), **addingCheese(), **addingKetchup(), **addingHotSauce()}
    createBeefCheeseBurger = lambda: {**createOrdinaryBurger(), **addingBeefPatty(), **frying(), **addingCheese(), **addingLettuce(), **addingTomatto(), **addingOnion(), **addingCucumber(), **addingKetchup(), **addingHotSauce()}
    createEggCheeseBurger = lambda: {**createOrdinaryBurger(), **addingEgg(), **frying(), **addingCheese(), **addingLettuce(), **addingTomatto(), **addingOnion(), **addingCucumber(), **addingKetchup(), **addingHotSauce()}

    davesSausageCheesePizza = createSausageCheesePizza()
    davesSausageCheesePizza['prepare']()  # Preparing...
    davesSausageCheesePizza['addFlatBread']()  # Adding flat bread...
    davesSausageCheesePizza['butter']()  # Buttering...
    davesSausageCheesePizza['addSausage']()  # Adding sausage...
    davesSausageCheesePizza['fry']()  # Frying...
    davesSausageCheesePizza['addCheese']()  # Adding cheese...
    davesSausageCheesePizza['addKetchup']()  # Adding ketchup...
    davesSausageCheesePizza['addHotSauce']()  # Adding hot sauce...
    davesSausageCheesePizza['serve']()  # Ready to serve!

    alisaSausageCheesePizza = createSausageCheesePizza()
    alisaSausageCheesePizza['prepare']()  # Preparing...
    alisaSausageCheesePizza['addFlatBread']()  # Adding flat bread...
    alisaSausageCheesePizza['butter']()  # Buttering...
    alisaSausageCheesePizza['addSausage']()  # Adding sausage...
    alisaSausageCheesePizza['fry']()  # Frying...
    alisaSausageCheesePizza['addCheese']()  # Adding cheese...
    alisaSausageCheesePizza['addKetchup']()  # Adding ketchup...
    alisaSausageCheesePizza['addHotSauce']()  # Adding hot sauce...
    alisaSausageCheesePizza['serve']()  # Ready to serve!

    triviaBeefCheeseBurger = createBeefCheeseBurger()
    triviaBeefCheeseBurger['prepare']()  # Preparing...
    triviaBeefCheeseBurger['addBunBread']()  # Adding bun bread...
    triviaBeefCheeseBurger['butter']()  # Buttering...
    triviaBeefCheeseBurger['addBeefPatty']()  # Adding beef patty...
    triviaBeefCheeseBurger['fry']()  # Frying...
    triviaBeefCheeseBurger['addCheese']()  # Adding cheese...
    triviaBeefCheeseBurger['addLettuce']()  # Adding lettuce...
    triviaBeefCheeseBurger['addTomatto']()  # Adding tomatto...
    triviaBeefCheeseBurger['addOnion']()  # Adding onion...
    triviaBeefCheeseBurger['addCucumber']()  # Adding cucumber...
    triviaBeefCheeseBurger['addKetchup']()  # Adding ketchup...
    triviaBeefCheeseBurger['addHotSauce']()  # Adding hot sauce...
    triviaBeefCheeseBurger['addBunBread']()  # Adding bun bread...
    triviaBeefCheeseBurger['serve']()  # Ready to serve!

    euniceBeefCheeseBurger = createEggCheeseBurger()
    euniceBeefCheeseBurger['prepare']()  # Preparing...
    euniceBeefCheeseBurger['addBunBread']()  # Adding bun bread...
    euniceBeefCheeseBurger['butter']()  # Buttering...
    euniceBeefCheeseBurger['addEgg']()  # Adding egg...
    euniceBeefCheeseBurger['fry']()  # Frying...
    euniceBeefCheeseBurger['addCheese']()  # Adding cheese...
    euniceBeefCheeseBurger['addLettuce']()  # Adding lettuce...
    euniceBeefCheeseBurger['addTomatto']()  # Adding tomatto...
    euniceBeefCheeseBurger['addOnion']()  # Adding onion...
    euniceBeefCheeseBurger['addCucumber']()  # Adding cucumber...
    euniceBeefCheeseBurger['addKetchup']()  # Adding ketchup...
    euniceBeefCheeseBurger['addHotSauce']()  # Adding hot sauce...
    euniceBeefCheeseBurger['addBunBread']()  # Adding bun bread...
    euniceBeefCheeseBurger['serve']()  # Ready to serve!

    angelHotDog = createOrdinaryHotdog()
    angelHotDog['prepare']()  # Preparing...
    angelHotDog['addLongBread']()  # Adding long bread...
    angelHotDog['butter']()  # Buttering...
    angelHotDog['addSausage']()  # Adding sausage...
    angelHotDog['fry']()  # Frying...
    angelHotDog['addHotSauce']()  # Adding hot sauce...
    angelHotDog['addKetchup']()  # Adding ketchup...
    angelHotDog['addMayonnaise']()  # Adding mayonnaise...
    angelHotDog['serve']()  # Ready to serve!


if __name__ == '__main__':
    python_composition()