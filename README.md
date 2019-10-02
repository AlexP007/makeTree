# makeTree
Функция преобразовывающая входящий массив ($arResult) в шаблон меню Битрикс

Преобразовывает одномерный массив в многомерный по ссылке.
Это мутирующая функция.

Например: 

    Array
        (
      [0] => Array
          (
              [TEXT] => Главная
              [LINK] => /
              [SELECTED] => 1
              [PERMISSION] => X
              [ADDITIONAL_LINKS] => Array
                  (
                  )

              [ITEM_TYPE] => D
              [ITEM_INDEX] => 0
              [PARAMS] => Array
                  (
                  )

              [CHAIN] => Array
                  (
                      [0] => Главная
                  )

              [DEPTH_LEVEL] => 1
              [IS_PARENT] => 
          )

      [1] => Array
          (
              [TEXT] => Магазин
              [LINK] => /shop/
              [SELECTED] => 
              [PERMISSION] => X
              [ADDITIONAL_LINKS] => Array
                  (
                  )

              [ITEM_TYPE] => D
              [ITEM_INDEX] => 1
              [PARAMS] => Array
                  (
                  )

              [CHAIN] => Array
                  (
                      [0] => Магазин
                  )

              [DEPTH_LEVEL] => 1
              [IS_PARENT] => 1
          )

      [2] => Array
          (
              [TEXT] => Верхняя Одежда
              [LINK] => /shop/outerwear/
              [SELECTED] => 
              [PERMISSION] => X
              [ADDITIONAL_LINKS] => Array
                  (
                  )

              [ITEM_TYPE] => D
              [ITEM_INDEX] => 0
              [PARAMS] => Array
                  (
                  )

              [CHAIN] => Array
                  (
                      [0] => Магазин
                      [1] => Верхняя Одежда
                  )

              [DEPTH_LEVEL] => 2
              [IS_PARENT] => 
          )

      [3] => Array
          (
              [TEXT] => Рубашки
              [LINK] => /shop/shirts/
              [SELECTED] => 
              [PERMISSION] => X
              [ADDITIONAL_LINKS] => Array
                  (
                  )

              [ITEM_TYPE] => D
              [ITEM_INDEX] => 1
              [PARAMS] => Array
                  (
                  )

              [CHAIN] => Array
                  (
                      [0] => Магазин
                      [1] => Рубашки
                  )

              [DEPTH_LEVEL] => 2
              [IS_PARENT] => 
          )

      [4] => Array
          (
              [TEXT] => О нас
              [LINK] => /about/
              [SELECTED] => 
              [PERMISSION] => X
              [ADDITIONAL_LINKS] => Array
                  (
                  )

              [ITEM_TYPE] => D
              [ITEM_INDEX] => 2
              [PARAMS] => Array
                  (
                  )

              [CHAIN] => Array
                  (
                      [0] => О нас
                  )

              [DEPTH_LEVEL] => 1
              [IS_PARENT] => 
          )

      [5] => Array
          (
              [TEXT] => Контакты
              [LINK] => /contact/
              [SELECTED] => 
              [PERMISSION] => X
              [ADDITIONAL_LINKS] => Array
                  (
                  )

              [ITEM_TYPE] => D
              [ITEM_INDEX] => 3
              [PARAMS] => Array
                  (
                  )

              [CHAIN] => Array
                  (
                      [0] => Контакты
                  )

              [DEPTH_LEVEL] => 1
              [IS_PARENT] => 
          )

  )
  
  Преобразует в 
  
     Array
    (
       [0] => Array
        (
            [TEXT] => Главная
            [LINK] => /
            [SELECTED] => 1
            [PERMISSION] => X
            [ADDITIONAL_LINKS] => Array
                (
                )

            [ITEM_TYPE] => D
            [ITEM_INDEX] => 0
            [PARAMS] => Array
                (
                )

            [CHAIN] => Array
                (
                    [0] => Главная
                )

            [DEPTH_LEVEL] => 1
            [IS_PARENT] => 
        )

    [1] => Array
        (
            [TEXT] => Магазин
            [LINK] => /shop/
            [SELECTED] => 
            [PERMISSION] => X
            [ADDITIONAL_LINKS] => Array
                (
                )

            [ITEM_TYPE] => D
            [ITEM_INDEX] => 1
            [PARAMS] => Array
                (
                )

            [CHAIN] => Array
                (
                    [0] => Магазин
                )

            [DEPTH_LEVEL] => 1
            [IS_PARENT] => 1
            [CHILDS] => Array
                (
                    [2] => Array
                        (
                            [TEXT] => Верхняя Одежда
                            [LINK] => /shop/outerwear/
                            [SELECTED] => 
                            [PERMISSION] => X
                            [ADDITIONAL_LINKS] => Array
                                (
                                )

                            [ITEM_TYPE] => D
                            [ITEM_INDEX] => 0
                            [PARAMS] => Array
                                (
                                )

                            [CHAIN] => Array
                                (
                                    [0] => Магазин
                                    [1] => Верхняя Одежда
                                )

                            [DEPTH_LEVEL] => 2
                            [IS_PARENT] => 
                        )

                    [3] => Array
                        (
                            [TEXT] => Рубашки
                            [LINK] => /shop/shirts/
                            [SELECTED] => 
                            [PERMISSION] => X
                            [ADDITIONAL_LINKS] => Array
                                (
                                )

                            [ITEM_TYPE] => D
                            [ITEM_INDEX] => 1
                            [PARAMS] => Array
                                (
                                )

                            [CHAIN] => Array
                                (
                                    [0] => Магазин
                                    [1] => Рубашки
                                )

                            [DEPTH_LEVEL] => 2
                            [IS_PARENT] => 
                        )

                )

        )

    [4] => Array
        (
            [TEXT] => О нас
            [LINK] => /about/
            [SELECTED] => 
            [PERMISSION] => X
            [ADDITIONAL_LINKS] => Array
                (
                )

            [ITEM_TYPE] => D
            [ITEM_INDEX] => 2
            [PARAMS] => Array
                (
                )

            [CHAIN] => Array
                (
                    [0] => О нас
                )

            [DEPTH_LEVEL] => 1
            [IS_PARENT] => 
        )

    [5] => Array
        (
            [TEXT] => Контакты
            [LINK] => /contact/
            [SELECTED] => 
            [PERMISSION] => X
            [ADDITIONAL_LINKS] => Array
                (
                )

            [ITEM_TYPE] => D
            [ITEM_INDEX] => 3
            [PARAMS] => Array
                (
                )

            [CHAIN] => Array
                (
                    [0] => Контакты
                )

            [DEPTH_LEVEL] => 1
            [IS_PARENT] => 
        )

)
