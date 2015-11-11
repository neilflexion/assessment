## Instructions
Complete the two sections below. Submit the answers as a pull request or email a patch file.

## MySQL
Answer the following questions in the space provided.

#### Example Question:
Example. Select all data from the fruit table.
```sql
// select statement
SELECT * FROM fruit;
```

#### Question 1:
Which fruit sold more units, apples or oranges?
```sql

```

#### Question 2:
Select the varieties of apples costing at least $2.00.
```sql

```

#### Question 3:
Make a sales report listing store ID, store name, and total money from sales. Order stores from most money to least.
```sql

```

#### Question 4:
Update the price of mandarin oranges from $1.99 to $2.25.
```sql

```

#### Question 5:
Insert a new type of fruit: a cameo apple costing $1.75
```sql

```

#### Question 6:
Identify the fruits that have sold less than 20 units.
```sql

```

#### Question 7:
Add a new decimal column to the sales table called *discount* that does not allow NULL values and set the default value to 0.00.
```sql

```

#### Question 8:
Update the values for the *discount* field with random values between 0 and 1.
```sql

```

## PHP
Using the code supplied, solve the two problems below.

#### Problem 1:
The Store view page is displaying an error. Fix it.

#### Problem 2:
Update the site to support the new *discount* column rate.
You should be able to save a sale with a discount.
A discount is applied per item. To get the total sale, subtract the discount from the cost and multiply it by the quantity.