
## RPG-bot

The purpose of this project is to track RPG game encounters, including characters and the relevant stats needed to run a basic encounter (primarily Name, Description, Hit Points, and Initiative).

Players can add or edit characters, that can then be assigned to encounters. This uses a 'belongsToMany' relationship, where multiple characters can belong to each encounter (and vice versa).

The Character and Encounter pages are for editing and creating their respective objects, while the Play tab is a read-only display of encounters and the characters assigned to them.


DEV NOTE: Encounter uses elegant routing, while Character uses simple custom routing.



Mike Andrews
