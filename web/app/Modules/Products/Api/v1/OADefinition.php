<?php


/**
 * @OA\Tag(
 *     name="Products",
 *     description="Operations about products",
 * )
 */


 /**
 * @OA\Schema(
 *   schema="Product",
 *   required={"title","start","end"},
 *   @OA\Property(
 *      property="id",
 *      type="integer",
 *      format="int64",
 *      readOnly=true
 *   ),
 *   @OA\Property(
 *      property="title",
 *      type="string"
 *   ),
 *   @OA\Property(
 *      property="description",
 *      type="string"
 *   ),
 *   @OA\Property(
 *      property="start",
 *      ref="#/components/schemas/DateTime",
 *      nullable=false
 *   ),
 *   @OA\Property(
 *      property="end",
 *      ref="#/components/schemas/DateTime",
 *      nullable=false
 *   ),
 *   @OA\Property(
 *      property="alert",
 *      type="boolean"
 *   ),
 * ),
*/
