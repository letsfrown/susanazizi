<?php

return function ($site) {
  $limit    = 4;
  $arbeiten = $site->find('arbeiten')->children()->listed()->sortBy('date', 'desc')->paginate($limit);

  return [
      'limit'      => $limit,
      'arbeiten'   => $arbeiten,
      'pagination' => $arbeiten->pagination(),
    ];
};