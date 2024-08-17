# Data Structure & Algorithm

## Data Structures

- List - twitter feeds
- Array - math oprations large data set
- Stack - last in first our (ex: undo > current > redo opration)
- Queue - printer jobs
- Heap - memory mange
- Tree - mostly user file system
- Suffix Tree
- Graph - facebook use to find we dose know friends
- T-tree - geo location
- Hash Table

## Algorithm

---

## Big o notation - test perform algorithm

We can check how wll an algorithm perform using,

1. Time complexity(no of steps).
   - O(x) - linearly
   - O(n2) - quadratic time complexity use worst case ex: nested loop
   - O(n) - off ten
   - O(log n) - logarithmic time complexity
   - O(1) - constant time complexity use best case
2. Memory complexity.

it also depend running machine ex: local computer and super computer speed different each other.

## Learn How to Work CPU

1 bit = 1,0 - in switch
8 bit = 1 bytes

current support 32bit or 64bit

## Learn How to Work Computer Memory

5. stack(one by one) - variable load in here
6. heap - object load by here
7. uninitialized <-- ex: int y;
8. data <--- static, constant variable
9. text <--- code or program should be interpreter or compiler language

## Variable

memory create a slot for data type somewhere in menory location int x =

1. primitive data type
   - store RAM in hexadecimal number(0xb73eb000)
2. complex data type (custom)
   - store in heap
3. Pointer in another variable location in memory

int = 32bit = 4 bytes
bool = 1 bit

## Data Structure

Array -

$arr = [];
int x[5];

2 = x + 2 x size (int)
= x + 8

Stack - First in last out(FILO)
Heap - store data any time can get
memory leaks solve by [garbage collector](https://www.php.net/manual/en/features.gc.php)
