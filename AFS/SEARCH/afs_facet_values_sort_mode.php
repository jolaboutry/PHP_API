<?php
require_once 'COMMON/afs_tools.php';

/** @brief Facet values sort mode enumerator. */
class AfsFacetValuesSortMode extends BasicEnum
{
    /** @brief Alphabetical sort order on facet value ids. */
    const ALPHA = 'alpha';
    /** @brief Numerical sort order on number of items per facet value. */
    const ITEMS = 'items';
    /** @brief Alphabetical sort order using user specified key. */
    const ALPHA_KEY = 'alphaKey';
    /** @brief Numerical sort order using user specified key. */
    const NUM_KEY = 'numKey';
}
