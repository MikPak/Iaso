# About the document

This document is a "living"-document, which is updates regularly. It is a rough requirement definition document's structure that can be used as a layout for requirement defining for various projects. The structure can, and will be edited! The goal is to create a document which merges service design and software design together seamlessly. The creator doesn't that any credit of the document's content.

Regards: NarsuMan




## XXXXXX-service/software requirement definition

Document version number 0.2

### Material classification

Public

### Permission

This document is owned by JAMK University of Applied Sciences.

## Contents

Table of contents?

//TO DO


## Introduction

  * What is the purpose of this document
  -This document is for specifying the requirements for this project
  * What is it associated with?
  -This document is for an online quiz game for nursing students
  * Important things to know
  -This is a student project of second year Software Engineering students in JAMK University of Applied Sciences
  * Relevant information to the reader?
  - //DO THIS ONE LAST

### Short product/service description/customer profile

  * What is expected of the defined service? Briefly
  -an online quiz game for nursing students. The game improves deduction skills, mathematical skills, and the ability to read  pharmaceutical information. 
  * Client story
  - //TO DO

### Client

  * Who is the client, contact information ?
  -Nursing department of JAMK University of Applied Sciences (Niilo)
  (If the information is on the project plan, put the links here!)

### Schedule

  * What is initially going to be made and when?
  - //TO DO
  (Recommended to be a part of the project plan)

| Waypoint | Begins | Ends | | | 
|:-----:|:-----:|:-----:|:-----:|:-----:|
| Profile client meetings | 1.2.2017 | 12.2.2017 |  | P3 |
| Meeting of the stakeholders | 13.2.2017 | |  | P4 |
| Preview | 25.2.2017 | |  | P1 |
| Requirement defining is over | 28.2.2017 | 12.2.2017 |  | P1 |

## Service's/Software's known stakeholders and customers

* Customers: Nursing department of JAMK University of Applied Sciences (Niilo)
-Stakeholders: Marko Rintamäki, Matti Mieskolainen

### Stakeholders

* Who is interested about the product or who has the "say" in regards of the product development?
- Marko Rintamäki, Matti Mieskolainen, Nursing Department of JAMK University of Applied Sciences (Niilo)

Identified customer profiles

## Customer Profiles

  * Client 1, First year Nursing student
  * Client 2, 2-3 year Nursing student
  * Client 3, Nursing student that has almost graduated, or has already graduated

  * [Link to customer profiles ](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/asiakasprofiilien_esimerkit.md)

## Stakeholder map

![](https://www.lucidchart.com/publicSegments/view/afbaa205-0924-40f8-a0a1-96e281aafcf5/image.png)

## General Customer Journey

![](https://camo.githubusercontent.com/1429ec848bc406a1bc7f38874188e4af03d3ee46/68747470733a2f2f7777772e64726f70626f782e636f6d2f732f6c6f7076357a6a6a337076676261392f757365725f6a6f75726e6579732d30322e706e673f646c3d31)

Covering the customer path, in which named stakeholder representatives are used

  *  [What is a customer path?](https://www.google.fi/search?q=palvelupolku&espv=2&biw=1626&bih=843&site=webhp&tbm=isch&tbo=u&source=univ&sa=X&ved=0ahUKEwjU3Kn22pnKAhWDWywKHWrDB-wQsAQIHA)


## Service Domain areas

In which sub-section can you divide the software/service?

//TO DO

Is there any different product versions to different environments, what?

  - Desktop version
  - Mobile version
  
Software sub-sections/blocks?

//TO DO

  * Control panel?
  * Database services?
  * User interfaces?
  * Authentication?
  * Billing?

## The most vital Customer Journey Maps (Asiakaspolku) regarding the chosen client profiles

  * Specifying the description to fit the project?
  // TO DO

### Customer Journey Map usage [clientprofile_1] point of view

// TO DO


### Customer Journey Map usage [clientprofile_2] point of view

// TO DO

### Customer Journey Map usage [clientprofile_3] point of view

// TO DO


## The most important features

  * Marking the most important features
  - 
  * What are the essential features?
  -
  * [Check MVP - Minimum Viable Product Features](https://en.wikipedia.org/wiki/Minimum_viable_product)
  -

### Feature 1

  * Description
  * Requirements of the feature?
  * UI-View ?
  * To be noted during testing

### Feature 2

  * Description
  * Requirements of the feature?
  * UI-View ?
  * To be noted during testing

### Feature 3

  * Description
  * Requirements of the feature?
  * UI-View ?
  * To be noted during testing

### Feature 4

  * Description
  * Requirements of the feature?
  * UI-View ?
  * To be noted during testing

## Use-Cases

### The most important use-cases as picture

![](https://www.lucidchart.com/publicSegments/view/6994e113-aa9d-4eeb-ab5d-edc605b604ef/image.png)

### Use-case 1

   * [Registering](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

### Use-case 2

   * [Password change](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

### Use-case 3

   * [Example 3](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

### Use-case 4

   * [Example 4](https://github.com/JAMK-IT/TT0S0100-software-desing-and-testing/blob/master/kayttotapauskuvauksen-pohja.md)

## Risks

   * Identifying the risks of the software/service..
   * [Risk control](https://fi.wikipedia.org/wiki/Riskienhallinta)

| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|RISK001| Sudden increase of the number of users, e.g during a exceptional situation | - | P1 |
|RISK002| The usability of the service getting weaker during heavy load | Practical |  | P5 |


|RISK003| The effect of a weak internet connection to the service | Practical | - | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial

## Functional Requirements

  * In this section you can raise notable requirements that are good to keep in mind!

| Requirement ID | Description | Type | Division | Responsible | Priority |
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|YVA0001| Service has to compatible with Android version 4.x and later | Technical | "ASAP"- | P1 |
|YVA0002| Service has to compatible with Windows Phone | Implementation |  "ASAP"-tuotantotiimi | P2 |
|YVA0003| Service has to compatible with Windows 95!!!! | Implementation|  "ASAP"-tuotantotiimi | P5 |

## Identified Functional Requirements

| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|VAT0001|  | Practical | "ASAP"-production team | P1 |
|VAT0002| The user can change password when required | Practical |  "ASAP"-production team | P5 |
|VAT0003| After the password change, the user doesn't need to re-login | Practical |  "ASAP"-production team | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial


## Identified Non-Functional Requirements

  * [Examples of information security requirements](https://confluence.csc.fi/display/oppija/10.+Tietoturvavaatimukset)

| Requirement ID | Description | Type | Division | Responsible | Priority | 
|:-----:|:-----:|:-----:|:-----:|:-----:|:-----:|
|VAL0201| The service has to be able to scale for 1000 users for a moment | Scalability | "ASAP"-production team | P1 |
|VAL0202| Service availability has to be 99.1% | Stability |  "ASAP"-production team | P5 |
|VAL0203| User info has to be protected | Information Security |  "ASAP"-production team | P3 |

  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial

### Usability

  * What has to be taken into consideration ?
  - // TO DO
  * Wishes of the client ?
  - // TO DO
  * Technological divisions/things that affect availability?
  - // TO DO

# User interface prototype


### Prototype introduction

   * Links to the prototype environment
   * Necessary information for the inspection of the prototype


## Service/software architecture

  * This section can be merged with technical designing
  * In regards of requirement definitions, it could be useful to describe the general implementation and problems associated with it.

![](https://camo.githubusercontent.com/5c169deb4debb278bb6219208f577843075ddab3/68747470733a2f2f7777772e64726f70626f782e636f6d2f732f6179707170797376726831316133312f636f6e747269626f6172642d6172636869746563747572652e706e673f646c3d31)

   * [Example from real life](https://confluence.csc.fi/display/OPHPALV/Koodistopalvelun+tekninen+dokumentaatio)




### Class proposal

  * Usually a part of a more detailed design
  * Can be referred with links...

  * Identified class proposals

![](https://www.lucidchart.com/publicSegments/view/16b2b5a7-f349-48bf-8efb-594521131e09/image.png)

### Class Diagram

  * Only a rough description necessary?

![](https://www.lucidchart.com/publicSegments/view/c680dd6c-6e68-43b7-bf6c-421bbe21a17c/image.png)

### Sequence Diagram

  * Sequence diagram is a convenient tool to present other thingss

![](https://en.wikipedia.org/wiki/File:CheckEmail.svg)

### Deployment diagram

  * In requirement defining this might be the most useful UML-depictions?
  * How the software/service will roughly work along with an older solution...
  * How the existing system will roughly work

![](https://www.lucidchart.com/publicSegments/view/6f727a36-f880-4dca-b5ac-133f6f860697/image.png)


## Risk-based pre-testing plan

### Known risks and test subjects

  * Risk -> The need to test
  * Requirement -> The need to test


##  Publishing plan and prioritizing

Publishing order isn't always linear. [Ks. Kriittinen polku](https://fi.wikipedia.org/wiki/Kriittinen_polku)
Althought sometimes it might feel like it:  [Release Plan](https://wiki.documentfoundation.org/ReleasePlan)

Functionality and implementation order

  * Feature 1 - March 2019
  * Feature 3 - April 2019
  * Feature 5 - May 2019
  * Feature 2 - September 2019
  *     


### Prioritizing


  * How to read the tables: P1 = Very important, P3 = Relevant, P5 = Trivial


## Standards and sources

  * ISTQB
  * IPMA
  * etc..



# Lähteet

# Lähteitä

  * https://fi.wikipedia.org/wiki/Ohjelmiston_vaatimusm%C3%A4%C3%A4rittely

