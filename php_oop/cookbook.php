<?php
include "classes/recipes.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/recipes.php";

$cookbook = new RecipeCollection("Teamtreehouse Recipes");
$cookbook->addRecipes($lemon_chicken);
$cookbook->addRecipes($granola_muffins);
$cookbook->addRecipes($belgian_waffles);
$cookbook->addRecipes($pepper_casserole);
$cookbook->addRecipes($lasagna);
$cookbook->addRecipes($dried_mushroom_ragout);
$cookbook->addRecipes($rabbit_catalan);
$cookbook->addRecipes($grilled_salmon_with_fennel);
$cookbook->addRecipes($pistachio_duck);
$cookbook->addRecipes($chili_pork);
$cookbook->addRecipes($crab_cakes);
$cookbook->addRecipes($beef_medallions);
$cookbook->addRecipes($silver_dollar_cakes);
$cookbook->addRecipes($french_toast);
$cookbook->addRecipes($corn_beef_hash);
$cookbook->addRecipes($granola);
$cookbook->addRecipes($spicy_omelette);
$cookbook->addRecipes($scones);

echo Render::listRecipes($cookbook->getRecipeTitles());
// echo Render::displayRecipe($belgian_waffles);











// $recipe1 = new Recipe();
// $recipe1->source = "Grandma Holigan";
// $recipe1->setTitle ("My First Recipe");
// $recipe1->addIngredient("egg",1);
// $recipe1->addIngredient("flour",2, "cup");

// $recipe2 = new Recipe();
// $recipe2->source = "Betty Crocker";
// $recipe2->setTitle ("My Second Recipe");

// echo $recipe1->getTitle();
// foreach ($recipe1->getIngredients() as $ing) {
//     echo "\n" . $ing["amount"] . "" . $ing["$measure"] . "" . $ing["item"];
// }

// $recipe1->addInstruction("This is my first instruction");
// $recipe2->addInstruction("This is my second instruction");

// echo implode("\n", $recipe1->getInstructions());

// $recipe1->addTag("Breakfast");
// $recipe1->addTag("Main Course");

// echo implode(",", $recipe1->getTags());

// $recipe1->setYield("6 servings");
// echo $recipe1->getYield();
// echo $recipe1->getSource();
