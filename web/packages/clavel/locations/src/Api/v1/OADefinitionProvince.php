<?php


/**
 * @OA\Tag(
 *     name="Provinces",
 *     description="Operations about provinces",
 * )
 */


 /**
 * @OA\Schema(
 *   schema="Province",
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
